/**
 * Dimensions.js
 *
 * Released under LGPL License.
 * Copyright (c) 1999-2017 Ephox Corp. All rights reserved
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

import Arr from '../util/Arr';
import NodeType from './NodeType';
import ClientRect from '../geom/ClientRect';

/**
 * This module measures nodes and returns client rects. The client rects has an
 * extra node property.
 *
 * @private
 * @class tinymce.dom.Dimensions
 */

const getClientRects = function (node) {
  const toArrayWithNode = function (clientRects) {
    return Arr.map(clientRects, function (clientRect) {
      clientRect = ClientRect.clone(clientRect);
      clientRect.node = node;

      return clientRect;
    });
  };

  if (Arr.isArray(node)) {
    return Arr.reduce(node, function (result, node) {
      return result.concat(getClientRects(node));
    }, []);
  }

  if (NodeType.isElement(node)) {
    return toArrayWithNode(node.getClientRects());
  }

  if (NodeType.isText(node)) {
    const rng = node.ownerDocument.createRange();

    rng.setStart(node, 0);
    rng.setEnd(node, node.data.length);

    return toArrayWithNode(rng.getClientRects());
  }
};

export default {
  /**
   * Returns the client rects for a specific node.
   *
   * @method getClientRects
   * @param {Array/DOMNode} node Node or array of nodes to get client rects on.
   * @param {Array} Array of client rects with a extra node property.
   */
  getClientRects
};