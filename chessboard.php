<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class ChessboardPlugin
 * @package Grav\Plugin
 */
class ChessboardPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0]
        ];
    }

    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerShortcode('FENShortcode.php', __DIR__);
    }
}
