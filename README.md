# Chessboard Plugin

The **Chessboard** Plugin for [Grav CMS](http://github.com/getgrav/grav) allows you to display chess positions on your site.

## Installation

Simply install the Chessboard plugin either using GPM:

    bin/gpm install chessboard

or using the admin panel.

When doing a manual install by copying the plugin to `user/plugins/chessboard`, make sure to also install the dependency [Shortcode Core](https://github.com/getgrav/grav-plugin-shortcode-core).

## Usage

Simply put the [FEN](https://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation) string of the chess position you want to display in `[fen]...[\fen]` shortcode tags.

### Example:
```
[fen]r1bqkbnr/pppp1ppp/2n5/4p3/4P3/5N2/PPPP1PPP/RNBQKB1R w KQkq - 2 3[/fen]
```

## Configuration

Before configuring this plugin, you should copy the `user/plugins/chessboard/chessboard.yaml` to `user/config/plugins/chessboard.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Credits

This plugin uses [chessboard.js](http://chessboardjs.com/) to display the chess boards.

## To Do

- [ ] Add link to analysis board on lichess.org for the given position.
- [ ] Add `[pgn]` shortcode to embed a whole game.
