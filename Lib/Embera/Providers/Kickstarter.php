<?php
/**
 * Kickstarter.php
 *
 * @package Providers
 * @author Michael Pratt <pratt@hablarmierda.net>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Embera\Providers;

/**
 * The kickstarter.com Provider
 */
class Kickstarter extends \Embera\Adapters\Service
{
    /** inline {@inheritdoc} */
    protected $apiUrl = 'http://www.kickstarter.com/services/oembed';

    /** inline {@inheritdoc} */
    protected function validateUrl()
    {
        $this->url->stripQueryString();
        $this->url->addWWW();

        return (preg_match('~/projects/(?:[^/]+)/(?:[^/]+)/?$~i', $this->url));
    }
}

?>