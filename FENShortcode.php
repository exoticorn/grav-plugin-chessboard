<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class FENShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('fen', function(ShortcodeInterface $sc) {

            // Add assets
            $this->shortcode->addAssets('js', ['jquery', 101]);
            $this->shortcode->addAssets('js', 'plugin://chessboard/js/chessboard-0.3.0.min.js');
            $this->shortcode->addAssets('css', 'plugin://chessboard/css/chessboard-0.3.0.min.css');

            $hash = $this->shortcode->getId($sc);

            $output = '<div id="'.$hash.'" style="width: 250px"></div>';
            $output = $output . '<script>ChessBoard("'.$hash.'", {position:"'.$sc->getContent().'",pieceTheme:"/user/plugins/chessboard/img/chesspieces/wikipedia/{piece}.png",showNotation:false})</script>';

            return $output;
        });
    }
}
