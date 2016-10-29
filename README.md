# Chessboard Plugin

The **Chessboard** Plugin is for [Grav CMS](http://github.com/getgrav/grav) and allows you to display chess positions on your site.

## Installation

Installing the Chessboard plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install chessboard

This will install the Chessboard plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/chessboard`.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/chessboard/chessboard.yaml` to `user/config/plugins/chessboard.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

Simply put the [FEN](https://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation) string of the chess position you want to display in `[fen]...[\fen]` shortcode tags.

### Example:
```
[fen]r1bqkbnr/pppp1ppp/2n5/4p3/4P3/5N2/PPPP1PPP/RNBQKB1R w KQkq - 2 3[/fen]
```

## Credits

This plugin uses [chessboard.js](http://chessboardjs.com/) to display the chess boards.

## To Do

- [ ] Add link to analysis board on lichess.org for the given position.
- [ ] Add `[pgn]` shortcode to embed a whole game.
