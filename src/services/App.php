<?php
/**
 * @link      https://sprout.barrelstrengthdesign.com/
 * @copyright Copyright (c) Barrel Strength Design LLC
 * @license   http://sprout.barrelstrengthdesign.com/license
 */

namespace barrelstrength\sproutbasefields\services;

use craft\base\Component;

class App extends Component
{
    /**
     * @var Address
     */
    public $addressField;

    /**
     * @var Phone
     */
    public $phoneField;

    /**
     * @var Utilities
     */
    public $utilities;

    /**
     * @var Url
     */
    public $urlField;

    /**
     * @var Email
     */
    public $emailField;

    /**
     * @var EmailDropdown
     */
    public $emailDropdownField;

    /**
     * @var RegularExpression
     */
    public $regularExpressionField;

    /**
     * @var AddressFormatter
     */
    public $addressFormatter;

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Sprout Fields
        $this->addressField = new Address();
        $this->addressFormatter = new AddressFormatter();
        $this->emailField = new Email();
        $this->emailDropdownField = new EmailDropdown();
        $this->phoneField = new Phone();
        $this->regularExpressionField = new RegularExpression();
        $this->urlField = new Url();
        $this->utilities = new Utilities();
    }
}
