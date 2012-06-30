<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


  /**
   * The "objectAccessControls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $storageService = new apiStorageService(...);
   *   $objectAccessControls = $storageService->objectAccessControls;
   *  </code>
   */
  class ObjectAccessControlsServiceResource extends apiServiceResource {


    /**
     * Creates a new ACL entry on the specified object. (objectAccessControls.insert)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param ObjectAccessControl $postBody
     * @return ObjectAccessControl
     */
    public function insert($bucket, $object, ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the ACL entry for the specified entity on the specified object.
     * (objectAccessControls.get)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @return ObjectAccessControl
     */
    public function get($bucket, $object, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves ACL entries on the specified object. (objectAccessControls.list)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @return ObjectAccessControls
     */
    public function listObjectAccessControls($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ObjectAccessControls($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an ACL entry on the specified object. (objectAccessControls.update)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @param ObjectAccessControl $postBody
     * @return ObjectAccessControl
     */
    public function update($bucket, $object, $entity, ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an ACL entry on the specified object. This method supports patch semantics.
     * (objectAccessControls.patch)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @param ObjectAccessControl $postBody
     * @return ObjectAccessControl
     */
    public function patch($bucket, $object, $entity, ObjectAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new ObjectAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the ACL entry for the specified entity on the specified object.
     * (objectAccessControls.delete)
     *
     * @param string $bucket Name of a bucket.
     * @param string $object Name of the object.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     */
    public function delete($bucket, $object, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "bucketAccessControls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $storageService = new apiStorageService(...);
   *   $bucketAccessControls = $storageService->bucketAccessControls;
   *  </code>
   */
  class BucketAccessControlsServiceResource extends apiServiceResource {


    /**
     * Creates a new ACL entry on the specified bucket. (bucketAccessControls.insert)
     *
     * @param string $bucket Name of a bucket.
     * @param BucketAccessControl $postBody
     * @return BucketAccessControl
     */
    public function insert($bucket, BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BucketAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the ACL entry for the specified entity on the specified bucket.
     * (bucketAccessControls.get)
     *
     * @param string $bucket Name of a bucket.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @return BucketAccessControl
     */
    public function get($bucket, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BucketAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves ACL entries on the specified bucket. (bucketAccessControls.list)
     *
     * @param string $bucket Name of a bucket.
     * @return BucketAccessControls
     */
    public function listBucketAccessControls($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BucketAccessControls($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an ACL entry on the specified bucket. (bucketAccessControls.update)
     *
     * @param string $bucket Name of a bucket.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @param BucketAccessControl $postBody
     * @return BucketAccessControl
     */
    public function update($bucket, $entity, BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BucketAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an ACL entry on the specified bucket. This method supports patch semantics.
     * (bucketAccessControls.patch)
     *
     * @param string $bucket Name of a bucket.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     * @param BucketAccessControl $postBody
     * @return BucketAccessControl
     */
    public function patch($bucket, $entity, BucketAccessControl $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BucketAccessControl($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the ACL entry for the specified entity on the specified bucket.
     * (bucketAccessControls.delete)
     *
     * @param string $bucket Name of a bucket.
     * @param string $entity The entity holding the permission. Can be user-userId, group-groupId, allUsers, or allAuthenticatedUsers.
     */
    public function delete($bucket, $entity, $optParams = array()) {
      $params = array('bucket' => $bucket, 'entity' => $entity);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "objects" collection of methods.
   * Typical usage is:
   *  <code>
   *   $storageService = new apiStorageService(...);
   *   $objects = $storageService->objects;
   *  </code>
   */
  class ObjectsServiceResource extends apiServiceResource {


    /**
     * Stores new data blobs and associated metadata. (objects.insert)
     *
     * @param string $bucket Name of the bucket in which to store the new object. Overrides the provided object metadata's bucket value, if any.
     * @param StorageObject $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string name Name of the object. Required when the object metadata is not otherwise provided. Overrides the object metadata's name value, if any.
     * @opt_param string projection Set of properties to return. Defaults to no_acl, unless the object resource specifies the acl property, when it defaults to full.
     * @return StorageObject
     */
    public function insert($bucket, StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new StorageObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves objects or their associated metadata. (objects.get)
     *
     * @param string $bucket Name of the bucket in which the object resides.
     * @param string $object Name of the object.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to no_acl.
     * @return StorageObject
     */
    public function get($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new StorageObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of objects matching the criteria. (objects.list)
     *
     * @param string $bucket Name of the bucket in which to look for objects.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string max-results Maximum number of items plus prefixes to return. As duplicate prefixes are omitted, fewer total results may be returned than requested.
     * @opt_param string projection Set of properties to return. Defaults to no_acl.
     * @opt_param string prefix Filter results to objects whose names begin with this prefix.
     * @opt_param string pageToken A previously-returned page token representing part of the larger set of results to view.
     * @opt_param string delimiter Returns results in a directory-like mode. items will contain only objects whose names, aside from the prefix, do not contain delimiter. Objects whose names, aside from the prefix, contain delimiter will have their name, truncated after the delimiter, returned in prefixes. Duplicate prefixes are omitted.
     * @return Objects
     */
    public function listObjects($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Objects($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a data blob's associated metadata. (objects.update)
     *
     * @param string $bucket Name of the bucket in which the object resides.
     * @param string $object Name of the object.
     * @param StorageObject $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to full.
     * @return StorageObject
     */
    public function update($bucket, $object, StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new StorageObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a data blob's associated metadata. This method supports patch semantics. (objects.patch)
     *
     * @param string $bucket Name of the bucket in which the object resides.
     * @param string $object Name of the object.
     * @param StorageObject $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to full.
     * @return StorageObject
     */
    public function patch($bucket, $object, StorageObject $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new StorageObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes data blobs and associated metadata. (objects.delete)
     *
     * @param string $bucket Name of the bucket in which the object resides.
     * @param string $object Name of the object.
     */
    public function delete($bucket, $object, $optParams = array()) {
      $params = array('bucket' => $bucket, 'object' => $object);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "buckets" collection of methods.
   * Typical usage is:
   *  <code>
   *   $storageService = new apiStorageService(...);
   *   $buckets = $storageService->buckets;
   *  </code>
   */
  class BucketsServiceResource extends apiServiceResource {


    /**
     * Creates a new bucket. (buckets.insert)
     *
     * @param Bucket $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to no_acl, unless the bucket resource specifies acl or defaultObjectAcl properties, when it defaults to full.
     * @return Bucket
     */
    public function insert(Bucket $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Bucket($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns metadata for the specified bucket. (buckets.get)
     *
     * @param string $bucket Name of a bucket.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to no_acl.
     * @return Bucket
     */
    public function get($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Bucket($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of buckets for a given project. (buckets.list)
     *
     * @param string $projectId A valid API project identifier.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string max-results Maximum number of buckets to return.
     * @opt_param string pageToken A previously-returned page token representing part of the larger set of results to view.
     * @opt_param string projection Set of properties to return. Defaults to no_acl.
     * @return Buckets
     */
    public function listBuckets($projectId, $optParams = array()) {
      $params = array('projectId' => $projectId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Buckets($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a bucket. (buckets.update)
     *
     * @param string $bucket Name of a bucket.
     * @param Bucket $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to full.
     * @return Bucket
     */
    public function update($bucket, Bucket $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Bucket($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a bucket. This method supports patch semantics. (buckets.patch)
     *
     * @param string $bucket Name of a bucket.
     * @param Bucket $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string projection Set of properties to return. Defaults to full.
     * @return Bucket
     */
    public function patch($bucket, Bucket $postBody, $optParams = array()) {
      $params = array('bucket' => $bucket, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Bucket($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an empty bucket. (buckets.delete)
     *
     * @param string $bucket Name of a bucket.
     */
    public function delete($bucket, $optParams = array()) {
      $params = array('bucket' => $bucket);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

/**
 * Service definition for Storage (v1beta1).
 *
 * <p>
 * Lets you store and retrieve potentially-large, immutable data objects.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://code.google.com/apis/storage/docs/developer-guide.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiStorageService extends apiService {
  public $objectAccessControls;
  public $bucketAccessControls;
  public $objects;
  public $buckets;
  /**
   * Constructs the internal representation of the Storage service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->restBasePath = '/storage/v1beta1/';
    $this->version = 'v1beta1';
    $this->serviceName = 'storage';

    $apiClient->addService($this->serviceName, $this->version);
    $this->objectAccessControls = new ObjectAccessControlsServiceResource($this, $this->serviceName, 'objectAccessControls', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "id": "storage.objectAccessControls.insert", "httpMethod": "POST", "path": "b/{bucket}/o/{object}/acl", "response": {"$ref": "ObjectAccessControl"}}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "id": "storage.objectAccessControls.get", "httpMethod": "GET", "path": "b/{bucket}/o/{object}/acl/{entity}", "response": {"$ref": "ObjectAccessControl"}}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}}, "id": "storage.objectAccessControls.list", "httpMethod": "GET", "path": "b/{bucket}/o/{object}/acl", "response": {"$ref": "ObjectAccessControls"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "id": "storage.objectAccessControls.update", "httpMethod": "PUT", "path": "b/{bucket}/o/{object}/acl/{entity}", "response": {"$ref": "ObjectAccessControl"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ObjectAccessControl"}, "id": "storage.objectAccessControls.patch", "httpMethod": "PATCH", "path": "b/{bucket}/o/{object}/acl/{entity}", "response": {"$ref": "ObjectAccessControl"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "b/{bucket}/o/{object}/acl/{entity}", "id": "storage.objectAccessControls.delete"}}}', true));
    $this->bucketAccessControls = new BucketAccessControlsServiceResource($this, $this->serviceName, 'bucketAccessControls', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "id": "storage.bucketAccessControls.insert", "httpMethod": "POST", "path": "b/{bucket}/acl", "response": {"$ref": "BucketAccessControl"}}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "id": "storage.bucketAccessControls.get", "httpMethod": "GET", "path": "b/{bucket}/acl/{entity}", "response": {"$ref": "BucketAccessControl"}}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}}, "id": "storage.bucketAccessControls.list", "httpMethod": "GET", "path": "b/{bucket}/acl", "response": {"$ref": "BucketAccessControls"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "id": "storage.bucketAccessControls.update", "httpMethod": "PUT", "path": "b/{bucket}/acl/{entity}", "response": {"$ref": "BucketAccessControl"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "BucketAccessControl"}, "id": "storage.bucketAccessControls.patch", "httpMethod": "PATCH", "path": "b/{bucket}/acl/{entity}", "response": {"$ref": "BucketAccessControl"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "entity": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "b/{bucket}/acl/{entity}", "id": "storage.bucketAccessControls.delete"}}}', true));
    $this->objects = new ObjectsServiceResource($this, $this->serviceName, 'objects', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "name": {"type": "string", "location": "query"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "supportsMediaUpload": true, "request": {"$ref": "Object"}, "mediaUpload": {"accept": ["*/*"], "protocols": {"simple": {"path": "/upload/storage/v1beta1/b/{bucket}/o", "multipart": true}, "resumable": {"path": "/resumable/upload/storage/v1beta1/b/{bucket}/o", "multipart": true}}}, "id": "storage.objects.insert", "httpMethod": "POST", "path": "b/{bucket}/o", "response": {"$ref": "Object"}}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "id": "storage.objects.get", "httpMethod": "GET", "path": "b/{bucket}/o/{object}", "response": {"$ref": "Object"}, "supportsMediaDownload": true}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"max-results": {"format": "uint32", "minimum": "0", "type": "integer", "location": "query"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}, "bucket": {"required": true, "type": "string", "location": "path"}, "delimiter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "prefix": {"type": "string", "location": "query"}}, "id": "storage.objects.list", "httpMethod": "GET", "supportsSubscription": true, "path": "b/{bucket}/o", "response": {"$ref": "Objects"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "request": {"$ref": "Object"}, "id": "storage.objects.update", "httpMethod": "PUT", "path": "b/{bucket}/o/{object}", "response": {"$ref": "Object"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "request": {"$ref": "Object"}, "id": "storage.objects.patch", "httpMethod": "PATCH", "path": "b/{bucket}/o/{object}", "response": {"$ref": "Object"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"object": {"required": true, "type": "string", "location": "path"}, "bucket": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "b/{bucket}/o/{object}", "id": "storage.objects.delete"}}}', true));
    $this->buckets = new BucketsServiceResource($this, $this->serviceName, 'buckets', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "request": {"$ref": "Bucket"}, "id": "storage.buckets.insert", "httpMethod": "POST", "path": "b", "response": {"$ref": "Bucket"}}, "get": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "id": "storage.buckets.get", "httpMethod": "GET", "path": "b/{bucket}", "response": {"$ref": "Bucket"}}, "list": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"max-results": {"format": "uint32", "minimum": "0", "type": "integer", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}, "projectId": {"format": "uint64", "required": true, "type": "string", "location": "query"}}, "id": "storage.buckets.list", "httpMethod": "GET", "path": "b", "response": {"$ref": "Buckets"}}, "update": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "request": {"$ref": "Bucket"}, "id": "storage.buckets.update", "httpMethod": "PUT", "path": "b/{bucket}", "response": {"$ref": "Bucket"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}, "projection": {"enum": ["full", "no_acl"], "type": "string", "location": "query"}}, "request": {"$ref": "Bucket"}, "id": "storage.buckets.patch", "httpMethod": "PATCH", "path": "b/{bucket}", "response": {"$ref": "Bucket"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_write"], "parameters": {"bucket": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "b/{bucket}", "id": "storage.buckets.delete"}}}', true));

  }
}

class Bucket extends apiModel {
  protected $__websiteType = 'BucketWebsite';
  protected $__websiteDataType = '';
  public $website;
  public $kind;
  public $timeCreated;
  public $projectId;
  protected $__aclType = 'BucketAccessControl';
  protected $__aclDataType = 'array';
  public $acl;
  protected $__defaultObjectAclType = 'ObjectAccessControl';
  protected $__defaultObjectAclDataType = 'array';
  public $defaultObjectAcl;
  public $location;
  protected $__ownerType = 'BucketOwner';
  protected $__ownerDataType = '';
  public $owner;
  public $id;
  public $selfLink;
  public function setWebsite(BucketWebsite $website) {
    $this->website = $website;
  }
  public function getWebsite() {
    return $this->website;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setTimeCreated($timeCreated) {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated() {
    return $this->timeCreated;
  }
  public function setProjectId($projectId) {
    $this->projectId = $projectId;
  }
  public function getProjectId() {
    return $this->projectId;
  }
  public function setAcl(/* array(BucketAccessControl) */ $acl) {
    $this->assertIsArray($acl, 'BucketAccessControl', __METHOD__);
    $this->acl = $acl;
  }
  public function getAcl() {
    return $this->acl;
  }
  public function setDefaultObjectAcl(/* array(ObjectAccessControl) */ $defaultObjectAcl) {
    $this->assertIsArray($defaultObjectAcl, 'ObjectAccessControl', __METHOD__);
    $this->defaultObjectAcl = $defaultObjectAcl;
  }
  public function getDefaultObjectAcl() {
    return $this->defaultObjectAcl;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setOwner(BucketOwner $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BucketAccessControl extends apiModel {
  public $domain;
  public $bucket;
  public $kind;
  public $id;
  public $role;
  public $entityId;
  public $entity;
  public $email;
  public $selfLink;
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BucketAccessControls extends apiModel {
  protected $__itemsType = 'BucketAccessControl';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BucketAccessControl) */ $items) {
    $this->assertIsArray($items, 'BucketAccessControl', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BucketOwner extends apiModel {
  public $entityId;
  public $entity;
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
}

class BucketWebsite extends apiModel {
  public $notFoundPage;
  public $mainPageSuffix;
  public function setNotFoundPage($notFoundPage) {
    $this->notFoundPage = $notFoundPage;
  }
  public function getNotFoundPage() {
    return $this->notFoundPage;
  }
  public function setMainPageSuffix($mainPageSuffix) {
    $this->mainPageSuffix = $mainPageSuffix;
  }
  public function getMainPageSuffix() {
    return $this->mainPageSuffix;
  }
}

class Buckets extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Bucket';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Bucket) */ $items) {
    $this->assertIsArray($items, 'Bucket', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class ObjectAccessControl extends apiModel {
  public $domain;
  public $object;
  public $bucket;
  public $kind;
  public $id;
  public $role;
  public $entityId;
  public $entity;
  public $email;
  public $selfLink;
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setObject($object) {
    $this->object = $object;
  }
  public function getObject() {
    return $this->object;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ObjectAccessControls extends apiModel {
  protected $__itemsType = 'ObjectAccessControl';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(ObjectAccessControl) */ $items) {
    $this->assertIsArray($items, 'ObjectAccessControl', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Objects extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'StorageObject';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $prefixes;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(StorageObject) */ $items) {
    $this->assertIsArray($items, 'StorageObject', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPrefixes(/* array(string) */ $prefixes) {
    $this->assertIsArray($prefixes, 'string', __METHOD__);
    $this->prefixes = $prefixes;
  }
  public function getPrefixes() {
    return $this->prefixes;
  }
}

class StorageObject extends apiModel {
  public $kind;
  public $name;
  protected $__mediaType = 'StorageObjectMedia';
  protected $__mediaDataType = '';
  public $media;
  public $bucket;
  public $contentEncoding;
  public $selfLink;
  protected $__ownerType = 'StorageObjectOwner';
  protected $__ownerDataType = '';
  public $owner;
  public $cacheControl;
  protected $__aclType = 'ObjectAccessControl';
  protected $__aclDataType = 'array';
  public $acl;
  public $id;
  public $contentDisposition;
  public $metadata;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setMedia(StorageObjectMedia $media) {
    $this->media = $media;
  }
  public function getMedia() {
    return $this->media;
  }
  public function setBucket($bucket) {
    $this->bucket = $bucket;
  }
  public function getBucket() {
    return $this->bucket;
  }
  public function setContentEncoding($contentEncoding) {
    $this->contentEncoding = $contentEncoding;
  }
  public function getContentEncoding() {
    return $this->contentEncoding;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setOwner(StorageObjectOwner $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setCacheControl($cacheControl) {
    $this->cacheControl = $cacheControl;
  }
  public function getCacheControl() {
    return $this->cacheControl;
  }
  public function setAcl(/* array(ObjectAccessControl) */ $acl) {
    $this->assertIsArray($acl, 'ObjectAccessControl', __METHOD__);
    $this->acl = $acl;
  }
  public function getAcl() {
    return $this->acl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setContentDisposition($contentDisposition) {
    $this->contentDisposition = $contentDisposition;
  }
  public function getContentDisposition() {
    return $this->contentDisposition;
  }
  public function setMetadata($metadata) {
    $this->metadata = $metadata;
  }
  public function getMetadata() {
    return $this->metadata;
  }
}

class StorageObjectMedia extends apiModel {
  public $contentType;
  public $timeCreated;
  public $algorithm;
  public $length;
  public $link;
  public $hash;
  public $data;
  public function setContentType($contentType) {
    $this->contentType = $contentType;
  }
  public function getContentType() {
    return $this->contentType;
  }
  public function setTimeCreated($timeCreated) {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated() {
    return $this->timeCreated;
  }
  public function setAlgorithm($algorithm) {
    $this->algorithm = $algorithm;
  }
  public function getAlgorithm() {
    return $this->algorithm;
  }
  public function setLength($length) {
    $this->length = $length;
  }
  public function getLength() {
    return $this->length;
  }
  public function setLink($link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setHash($hash) {
    $this->hash = $hash;
  }
  public function getHash() {
    return $this->hash;
  }
  public function setData($data) {
    $this->data = $data;
  }
  public function getData() {
    return $this->data;
  }
}

class StorageObjectOwner extends apiModel {
  public $entityId;
  public $entity;
  public function setEntityId($entityId) {
    $this->entityId = $entityId;
  }
  public function getEntityId() {
    return $this->entityId;
  }
  public function setEntity($entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
}
