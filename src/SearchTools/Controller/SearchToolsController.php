<?php
namespace SearchTools\Controller;

/**
 * Feedback Class
 *
 * Controls the SearchTools
 *
 * @category VuFind
 * @package  Controller
 * @author   Kristof Keßler <kristof.kessler@tu-braunschweig.de>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development Wiki
 */
class SearchToolsController extends \VuFind\Controller\AbstractBase
{
    /**
     * Display Feedback home form.
     *
     * @return \Laminas\View\Model\ViewModel
     */
    public function homeAction()
    {
        return $this->createViewModel(['template' => $this->params()->fromQuery('template')]);
    }
}
