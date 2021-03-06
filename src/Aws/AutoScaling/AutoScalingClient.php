<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\AutoScaling;

use Aws\Common\Client\AbstractClient;
use Aws\Common\Client\ClientBuilder;
use Aws\Common\Enum\ClientOptions as Options;
use Guzzle\Common\Collection;
use Guzzle\Service\Resource\Model;

/**
 * Client to interact with Auto Scaling
 *
 * @method Model createAutoScalingGroup(array $args = array()) {@command autoscaling CreateAutoScalingGroup}
 * @method Model createLaunchConfiguration(array $args = array()) {@command autoscaling CreateLaunchConfiguration}
 * @method Model createOrUpdateTags(array $args = array()) {@command autoscaling CreateOrUpdateTags}
 * @method Model deleteAutoScalingGroup(array $args = array()) {@command autoscaling DeleteAutoScalingGroup}
 * @method Model deleteLaunchConfiguration(array $args = array()) {@command autoscaling DeleteLaunchConfiguration}
 * @method Model deleteNotificationConfiguration(array $args = array()) {@command autoscaling DeleteNotificationConfiguration}
 * @method Model deletePolicy(array $args = array()) {@command autoscaling DeletePolicy}
 * @method Model deleteScheduledAction(array $args = array()) {@command autoscaling DeleteScheduledAction}
 * @method Model deleteTags(array $args = array()) {@command autoscaling DeleteTags}
 * @method Model describeAdjustmentTypes(array $args = array()) {@command autoscaling DescribeAdjustmentTypes}
 * @method Model describeAutoScalingGroups(array $args = array()) {@command autoscaling DescribeAutoScalingGroups}
 * @method Model describeAutoScalingInstances(array $args = array()) {@command autoscaling DescribeAutoScalingInstances}
 * @method Model describeAutoScalingNotificationTypes(array $args = array()) {@command autoscaling DescribeAutoScalingNotificationTypes}
 * @method Model describeLaunchConfigurations(array $args = array()) {@command autoscaling DescribeLaunchConfigurations}
 * @method Model describeMetricCollectionTypes(array $args = array()) {@command autoscaling DescribeMetricCollectionTypes}
 * @method Model describeNotificationConfigurations(array $args = array()) {@command autoscaling DescribeNotificationConfigurations}
 * @method Model describePolicies(array $args = array()) {@command autoscaling DescribePolicies}
 * @method Model describeScalingActivities(array $args = array()) {@command autoscaling DescribeScalingActivities}
 * @method Model describeScalingProcessTypes(array $args = array()) {@command autoscaling DescribeScalingProcessTypes}
 * @method Model describeScheduledActions(array $args = array()) {@command autoscaling DescribeScheduledActions}
 * @method Model describeTags(array $args = array()) {@command autoscaling DescribeTags}
 * @method Model describeTerminationPolicyTypes(array $args = array()) {@command autoscaling DescribeTerminationPolicyTypes}
 * @method Model disableMetricsCollection(array $args = array()) {@command autoscaling DisableMetricsCollection}
 * @method Model enableMetricsCollection(array $args = array()) {@command autoscaling EnableMetricsCollection}
 * @method Model executePolicy(array $args = array()) {@command autoscaling ExecutePolicy}
 * @method Model putNotificationConfiguration(array $args = array()) {@command autoscaling PutNotificationConfiguration}
 * @method Model putScalingPolicy(array $args = array()) {@command autoscaling PutScalingPolicy}
 * @method Model putScheduledUpdateGroupAction(array $args = array()) {@command autoscaling PutScheduledUpdateGroupAction}
 * @method Model resumeProcesses(array $args = array()) {@command autoscaling ResumeProcesses}
 * @method Model setDesiredCapacity(array $args = array()) {@command autoscaling SetDesiredCapacity}
 * @method Model setInstanceHealth(array $args = array()) {@command autoscaling SetInstanceHealth}
 * @method Model suspendProcesses(array $args = array()) {@command autoscaling SuspendProcesses}
 * @method Model terminateInstanceInAutoScalingGroup(array $args = array()) {@command autoscaling TerminateInstanceInAutoScalingGroup}
 * @method Model updateAutoScalingGroup(array $args = array()) {@command autoscaling UpdateAutoScalingGroup}
 */
class AutoScalingClient extends AbstractClient
{
    /**
     * Factory method to create a new Auto Scaling client using an array of configuration options.
     *
     * The following array keys and values are available options:
     *
     * - Credential options (`key`, `secret`, and optional `token` OR `credentials` is required)
     *     - key: AWS Access Key ID
     *     - secret: AWS secret access key
     *     - credentials: You can optionally provide a custom `Aws\Common\Credentials\CredentialsInterface` object
     *     - token: Custom AWS security token to use with request authentication
     *     - token.ttd: UNIX timestamp for when the custom credentials expire
     *     - credentials.cache.key: Optional custom cache key to use with the credentials
     * - Region and Endpoint options (a `region` and optional `scheme` OR a `base_url` is required)
     *     - region: Region name (e.g. 'us-east-1', 'us-west-1', 'us-west-2', 'eu-west-1', etc...)
     *     - scheme: URI Scheme of the base URL (e.g. 'https', 'http').
     *     - base_url: Instead of using a `region` and `scheme`, you can specify a custom base URL for the client
     *     - endpoint_provider: Optional `Aws\Common\Region\EndpointProviderInterface` used to provide region endpoints
     * - Generic client options
     *     - ssl.cert: Set to true to use the bundled CA cert or pass the full path to an SSL certificate bundle. This
     *           option should be used when you encounter curl error code 60.
     *     - curl.CURLOPT_VERBOSE: Set to true to output curl debug information during transfers
     *     - curl.*: Prefix any available cURL option with `curl.` to add cURL options to each request.
     *           See: http://www.php.net/manual/en/function.curl-setopt.php
     *     - service.description.cache.ttl: Optional TTL used for the service description cache
     * - Signature options
     *     - signature: You can optionally provide a custom signature implementation used to sign requests
     *     - signature.service: Set to explicitly override the service name used in signatures
     *     - signature.region:  Set to explicitly override the region name used in signatures
     * - Exponential backoff options
     *     - client.backoff.logger: `Guzzle\Common\Log\LogAdapterInterface` object used to log backoff retries. Use
     *           'debug' to emit PHP warnings when a retry is issued.
     *     - client.backoff.logger.template: Optional template to use for exponential backoff log messages. See
     *           `Guzzle\Http\Plugin\ExponentialBackoffLogger` for formatting information.
     *
     * @param array|Collection $config Client configuration data
     *
     * @return self
     */
    public static function factory($config = array())
    {
        return ClientBuilder::factory(__NAMESPACE__)
            ->setConfig($config)
            ->setConfigDefaults(array(
                Options::SERVICE_DESCRIPTION => __DIR__ . '/Resources/autoscaling-2011-01-01.php'
            ))
            ->build();
    }
}
