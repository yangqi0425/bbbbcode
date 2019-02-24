<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/zerosonesfun-bbbbcode/styles.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[tooltip="{TEXT1}" placement="{TEXT2}"]{TEXT3}[/tooltip]',
                '<span class="bb-tooltip" data-tooltip="{TEXT1}" data-placement="{TEXT2}">{TEXT3}</span>'
            );
            $config->BBCodes->addCustom(
                '[accordion header="{TEXT4}"]{TEXT5}[/accordion]',
                '<div class="accordion">
                    <input type="radio" name="radacc" class="accordion-chk" />
                    <h3 class="accordion-header">
                        {TEXT4}
                    <span class="acc-icon"></span>
                    </h3>
                    <div class="accordion-content">
                        <p>
                        {TEXT5}
                        </p>
                    </div>
                </div>'
            );
            $config->BBCodes->addCustom(
                '[action]{TEXT6}[/action]',
                '<div class="asterisk asterisk-3">
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                 </div>
                    <span class="action-text">{TEXT6}</span>
                    <div class="asterisk asterisk-3">
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                 </div>'
            );
            $config->BBCodes->addCustom(
                '[animal="{TEXT7}"]',
                '<span class="{TEXT7}"></span>'
            );
        })
];
