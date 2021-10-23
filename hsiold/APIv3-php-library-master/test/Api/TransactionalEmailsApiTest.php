<?php
/**
 * TransactionalEmailsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://fastsafestore.su/
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://fastsafestore.su/  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://fastsafestore.su/
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://fastsafestore.su/
 * Please update the test case below to test the endpoint.
 */

namespace SendinBlue\Client;

use \SendinBlue\Client\Configuration;
use \SendinBlue\Client\ApiException;
use \SendinBlue\Client\ObjectSerializer;

/**
 * TransactionalEmailsApiTest Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://fastsafestore.su/
 */
class TransactionalEmailsApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for blockNewDomain
     *
     * Add a new domain to the list of blocked domains.
     *
     */
    public function testBlockNewDomain()
    {
    }

    /**
     * Test case for createSmtpTemplate
     *
     * Create an email template.
     *
     */
    public function testCreateSmtpTemplate()
    {
    }

    /**
     * Test case for deleteBlockedDomain
     *
     * Unblock an existing domain from the list of blocked domains.
     *
     */
    public function testDeleteBlockedDomain()
    {
    }

    /**
     * Test case for deleteHardbounces
     *
     * Delete hardbounces.
     *
     */
    public function testDeleteHardbounces()
    {
    }

    /**
     * Test case for deleteSmtpTemplate
     *
     * Delete an inactive email template.
     *
     */
    public function testDeleteSmtpTemplate()
    {
    }

    /**
     * Test case for getAggregatedSmtpReport
     *
     * Get your transactional email activity aggregated over a period of time.
     *
     */
    public function testGetAggregatedSmtpReport()
    {
    }

    /**
     * Test case for getBlockedDomains
     *
     * Get the list of blocked domains.
     *
     */
    public function testGetBlockedDomains()
    {
    }

    /**
     * Test case for getEmailEventReport
     *
     * Get all your transactional email activity (unaggregated events).
     *
     */
    public function testGetEmailEventReport()
    {
    }

    /**
     * Test case for getSmtpReport
     *
     * Get your transactional email activity aggregated per day.
     *
     */
    public function testGetSmtpReport()
    {
    }

    /**
     * Test case for getSmtpTemplate
     *
     * Returns the template information.
     *
     */
    public function testGetSmtpTemplate()
    {
    }

    /**
     * Test case for getSmtpTemplates
     *
     * Get the list of email templates.
     *
     */
    public function testGetSmtpTemplates()
    {
    }

    /**
     * Test case for getTransacBlockedContacts
     *
     * Get the list of blocked or unsubscribed transactional contacts.
     *
     */
    public function testGetTransacBlockedContacts()
    {
    }

    /**
     * Test case for getTransacEmailContent
     *
     * Get the personalized content of a sent transactional email.
     *
     */
    public function testGetTransacEmailContent()
    {
    }

    /**
     * Test case for getTransacEmailsList
     *
     * Get the list of transactional emails on the basis of allowed filters.
     *
     */
    public function testGetTransacEmailsList()
    {
    }

    /**
     * Test case for sendTemplate
     *
     * Send a template.
     *
     */
    public function testSendTemplate()
    {
    }

    /**
     * Test case for sendTestTemplate
     *
     * Send a template to your test list.
     *
     */
    public function testSendTestTemplate()
    {
    }

    /**
     * Test case for sendTransacEmail
     *
     * Send a transactional email.
     *
     */
    public function testSendTransacEmail()
    {
    }

    /**
     * Test case for smtpBlockedContactsEmailDelete
     *
     * Unblock or resubscribe a transactional contact.
     *
     */
    public function testSmtpBlockedContactsEmailDelete()
    {
    }

    /**
     * Test case for smtpLogMessageIdDelete
     *
     * Delete an SMTP transactional log.
     *
     */
    public function testSmtpLogMessageIdDelete()
    {
    }

    /**
     * Test case for updateSmtpTemplate
     *
     * Update an email template.
     *
     */
    public function testUpdateSmtpTemplate()
    {
    }
}
