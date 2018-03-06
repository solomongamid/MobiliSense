import { Assertions } from '@ephox/agar';
import { Chain } from '@ephox/agar';
import { Logger } from '@ephox/agar';
import { Pipeline } from '@ephox/agar';
import { Arr } from '@ephox/katamari';
import { Fun } from '@ephox/katamari';
import { Result } from '@ephox/katamari';
import { Hierarchy } from '@ephox/sugar';
import { Element } from '@ephox/sugar';
import { Html } from '@ephox/sugar';
import TableDeleteAction from 'tinymce/core/delete/TableDeleteAction';
import { UnitTest } from '@ephox/bedrock';

UnitTest.asynctest('browser.tinymce.core.delete.TableDeleteActionTest', function () {
  const success = arguments[arguments.length - 2];
  const failure = arguments[arguments.length - 1];

  const cFromHtml = function (html, startPath, startOffset, endPath, endOffset) {
    return Chain.mapper(function () {
      const elm = Element.fromHtml(html);
      const sc = Hierarchy.follow(elm, startPath).getOrDie();
      const ec = Hierarchy.follow(elm, endPath).getOrDie();
      const rng = document.createRange();

      rng.setStart(sc.dom(), startOffset);
      rng.setEnd(ec.dom(), endOffset);

      return TableDeleteAction.getActionFromRange(elm, rng);
    });
  };

  const fail = function (message) {
    return Fun.constant(Result.error(message));
  };

  const cAssertNone = Chain.op(function (x) {
    Assertions.assertEq('Is none', true, x.isNone());
  });

  const cExtractActionCells = Chain.binder(function (actionOpt) {
    return actionOpt
        .fold(
          fail('unexpected nothing'),
          function (action) {
            return action.fold(
              fail('unexpected action'),
              function (xs) {
                const cellString = Arr.map(xs, Html.getOuter).join('');

                return Result.value(cellString);
              }
            );
          }
        );
  });

  const cExtractTableFromDeleteAction = Chain.binder(function (actionOpt) {
    return actionOpt
      .fold(
        fail('unexpected nothing'),
        function (action) {
          return action.fold(
            function (table) {
              return Result.value(Html.getOuter(table));
            },
            fail('unexpected action')
          );
        }
      );
  });

  Pipeline.async({}, [
    Logger.t('collapsed range should return none', Chain.asStep({}, [
      cFromHtml('<table><tbody><tr><td>a</td><td>b</td><td>c</td></tr></tbody></table>', [0, 0, 0, 0], 0, [0, 0, 0, 0], 0),
      cAssertNone
    ])),

    Logger.t('select two out of three cells returns the emptycells action', Chain.asStep({}, [
      cFromHtml('<table><tbody><tr><td>a</td><td>b</td><td>c</td></tr></tbody></table>', [0, 0, 0, 0], 0, [0, 0, 1, 0], 1),
      cExtractActionCells,
      Assertions.cAssertEq('Should be cells', '<td>a</td><td>b</td>')
    ])),

    Logger.t('select two out of three cells returns the emptycells action', Chain.asStep({}, [
      cFromHtml('<table><tbody><tr><th>a</th><th>b</th><th>c</th></tr></tbody></table>', [0, 0, 0, 0], 0, [0, 0, 1, 0], 1),
      cExtractActionCells,
      Assertions.cAssertEq('Should be cells', '<th>a</th><th>b</th>')
    ])),

    Logger.t('select three out of three cells returns the removeTable action', Chain.asStep({}, [
      cFromHtml('<table><tbody><tr><td>a</td><td>b</td><td>c</td></tr></tbody></table>', [0, 0, 0, 0], 0, [0, 0, 2, 0], 1),
      cExtractTableFromDeleteAction,
      Assertions.cAssertEq('should be table', '<table><tbody><tr><td>a</td><td>b</td><td>c</td></tr></tbody></table>')
    ])),

    Logger.t('select between rows, not all cells', Chain.asStep({}, [
      cFromHtml(
        '<table><tbody><tr><th>a</th><th>b</th><th>c</th></tr><tr><td>d</td><td>e</td><td>f</td></tr></tbody></table>',
        [0, 0, 1, 0], 0, [0, 1, 0, 0], 1
      ),
      cExtractActionCells,
      Assertions.cAssertEq('should be cells', '<th>b</th><th>c</th><td>d</td>')
    ])),

    Logger.t('select between rows, all cells', Chain.asStep({}, [
      cFromHtml(
        '<table><tbody><tr><th>a</th><th>b</th><th>c</th></tr><tr><td>d</td><td>e</td><td>f</td></tr></tbody></table>',
        [0, 0, 0, 0], 0, [0, 1, 2, 0], 1
      ),
      cExtractTableFromDeleteAction,
      Assertions.cAssertEq('should be table', '<table><tbody><tr><th>a</th><th>b</th><th>c</th></tr><tr><td>d</td><td>e</td><td>f</td></tr></tbody></table>')
    ]))
  ], function () {
    success();
  }, failure);
});
