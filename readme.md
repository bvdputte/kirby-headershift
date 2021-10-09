# Headershift for Kirby 3

File method to shift h-tags down the hierarchy.

Editors can then write content without thinking about the right hierarchy where the content will end up. The most important title can be `h1` in the panel; but in the template the developer could shift this to e.g. `h2` or `h3`.

## Installation

- unzip [master.zip](https://github.com/bvdputte/kirby-headershift/archive/master.zip) as folder `site/plugins/kirby-headershift` or
- `git submodule add https://github.com/bvdputte/kirby-headershift.git site/plugins/kirby-headershift`

## Usage

```php
$page->myField()->kt()->headershift(); // shifts all h elements by 1 position down; e.g. `h1` will become `h2`
$page->myField()->kt()->headershift(2); // shifts all h elements by 2 position down; e.g. `h1` will become `h3`
```

## Caveat

`<h6>` is the lowest existing h-tag in the HTML spec. So the lowest title will be `<h6>`; keep this in mind if you shift down titles in content where there are a lot of low-level h-tags. E.g. if there are both `h5` and `h6` elements in the source content they will both end up as `h6` in the generated field.
