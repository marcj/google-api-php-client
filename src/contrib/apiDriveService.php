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
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $files = $driveService->files;
   *  </code>
   */
  class FilesServiceResource extends apiServiceResource {


    /**
     * Insert a new file. (files.insert)
     *
     * @param DriveFile $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the head revision of the uploaded file.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, or .gif uploads.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @return DriveFile
     */
    public function insert(DriveFile $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Restores a file from the trash. (files.untrash)
     *
     * @param string $fileId The ID of the file to untrash.
     * @return DriveFile
     */
    public function untrash($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('untrash', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Moves a file to the trash. (files.trash)
     *
     * @param string $fileId The ID of the file to trash.
     * @return DriveFile
     */
    public function trash($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('trash', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a file's metadata by ID. (files.get)
     *
     * @param string $fileId The ID for the file in question.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool updateViewedDate Whether to update the view date after successfully retrieving the file.
     * @opt_param string projection Restrict information returned for simplicity and optimization.
     * @return DriveFile
     */
    public function get($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists the user's files. (files.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string q Query string for searching files.
     * @opt_param string pageToken Page token for files.
     * @opt_param string projection Restrict information returned for simplicity and optimization.
     * @opt_param int maxResults Maximum number of files to return.
     * @return FileList
     */
    public function listFiles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new FileList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates file metadata and/or content (files.update)
     *
     * @param string $fileId The ID of the file to update.
     * @param DriveFile $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If false, the blob data in the current head revision will be replaced.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, or .gif uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return DriveFile
     */
    public function update($fileId, DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates file metadata and/or content. This method supports patch semantics. (files.patch)
     *
     * @param string $fileId The ID of the file to update.
     * @param DriveFile $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If false, the blob data in the current head revision will be replaced.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, or .gif uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return DriveFile
     */
    public function patch($fileId, DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Set the file's updated time to the current server time. (files.touch)
     *
     * @param string $fileId The ID of the file to update.
     * @return DriveFile
     */
    public function touch($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('touch', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a copy of the specified file. (files.copy)
     *
     * @param string $fileId The ID of the file to copy.
     * @param DriveFile $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, or .gif uploads.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return DriveFile
     */
    public function copy($fileId, DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('copy', array($params));
      if ($this->useObjects()) {
        return new DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Permanently deletes a file by ID. Skips the trash. (files.delete)
     *
     * @param string $fileId The ID of the file to delete.
     */
    public function delete($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "about" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $about = $driveService->about;
   *  </code>
   */
  class AboutServiceResource extends apiServiceResource {


    /**
     * Gets the information about the current user along with Drive API settings (about.get)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool includeSubscribed Whether to include subscribed items when calculating the number of remaining change IDs
     * @opt_param string maxChangeIdCount Maximum number of remaining change IDs to count
     * @opt_param string startChangeId Change ID to start counting from when calculating number of remaining change IDs
     * @return About
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new About($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "apps" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $apps = $driveService->apps;
   *  </code>
   */
  class AppsServiceResource extends apiServiceResource {


    /**
     * Lists a user's apps. (apps.list)
     *
     * @return AppList
     */
    public function listApps($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new AppList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "parents" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $parents = $driveService->parents;
   *  </code>
   */
  class ParentsServiceResource extends apiServiceResource {


    /**
     * Adds a parent folder for a file. (parents.insert)
     *
     * @param string $fileId The ID of the file.
     * @param ParentReference $postBody
     * @return ParentReference
     */
    public function insert($fileId, ParentReference $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new ParentReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific parent reference. (parents.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @return ParentReference
     */
    public function get($fileId, $parentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'parentId' => $parentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new ParentReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's parents. (parents.list)
     *
     * @param string $fileId The ID of the file.
     * @return ParentList
     */
    public function listParents($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ParentList($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes a parent from a file. (parents.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     */
    public function delete($fileId, $parentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'parentId' => $parentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "revisions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $revisions = $driveService->revisions;
   *  </code>
   */
  class RevisionsServiceResource extends apiServiceResource {


    /**
     * Updates a revision. This method supports patch semantics. (revisions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Revision $postBody
     * @return Revision
     */
    public function patch($fileId, $revisionId, Revision $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Revision($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific revision. (revisions.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @return Revision
     */
    public function get($fileId, $revisionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Revision($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's revisions. (revisions.list)
     *
     * @param string $fileId The ID of the file.
     * @return RevisionList
     */
    public function listRevisions($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new RevisionList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a revision. (revisions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Revision $postBody
     * @return Revision
     */
    public function update($fileId, $revisionId, Revision $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Revision($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes a revision. (revisions.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     */
    public function delete($fileId, $revisionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "changes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $changes = $driveService->changes;
   *  </code>
   */
  class ChangesServiceResource extends apiServiceResource {


    /**
     * Lists the changes for a user. (changes.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool includeSubscribed Whether to include subscribed items.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @return ChangeList
     */
    public function listChanges($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ChangeList($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific change. (changes.get)
     *
     * @param string $changeId The ID of the change.
     * @return Change
     */
    public function get($changeId, $optParams = array()) {
      $params = array('changeId' => $changeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Change($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "children" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $children = $driveService->children;
   *  </code>
   */
  class ChildrenServiceResource extends apiServiceResource {


    /**
     * Inserts a file into a folder. (children.insert)
     *
     * @param string $folderId The ID of the folder.
     * @param ChildReference $postBody
     * @return ChildReference
     */
    public function insert($folderId, ChildReference $postBody, $optParams = array()) {
      $params = array('folderId' => $folderId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new ChildReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific child reference. (children.get)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @return ChildReference
     */
    public function get($folderId, $childId, $optParams = array()) {
      $params = array('folderId' => $folderId, 'childId' => $childId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new ChildReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a folder's children. (children.list)
     *
     * @param string $folderId The ID of the folder.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string q Query string for searching children.
     * @opt_param string pageToken Page token for children.
     * @opt_param int maxResults Maximum number of children to return.
     * @return ChildList
     */
    public function listChildren($folderId, $optParams = array()) {
      $params = array('folderId' => $folderId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ChildList($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes a child from a folder. (children.delete)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     */
    public function delete($folderId, $childId, $optParams = array()) {
      $params = array('folderId' => $folderId, 'childId' => $childId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "permissions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new apiDriveService(...);
   *   $permissions = $driveService->permissions;
   *  </code>
   */
  class PermissionsServiceResource extends apiServiceResource {


    /**
     * Inserts a permission for a file. (permissions.insert)
     *
     * @param string $fileId The ID for the file.
     * @param Permission $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool sendNotificationEmails Whether to send notification emails.
     * @return Permission
     */
    public function insert($fileId, Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a permission by ID. (permissions.get)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @return Permission
     */
    public function get($fileId, $permissionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's permissions. (permissions.list)
     *
     * @param string $fileId The ID for the file.
     * @return PermissionList
     */
    public function listPermissions($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new PermissionList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a permission. (permissions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Permission $postBody
     * @return Permission
     */
    public function update($fileId, $permissionId, Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a permission. This method supports patch semantics. (permissions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Permission $postBody
     * @return Permission
     */
    public function patch($fileId, $permissionId, Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a permission from a file. (permissions.delete)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     */
    public function delete($fileId, $permissionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

/**
 * Service definition for Drive (v2).
 *
 * <p>
 * The API to interact with Drive.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/drive/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiDriveService extends apiService {
  public $files;
  public $about;
  public $apps;
  public $parents;
  public $revisions;
  public $changes;
  public $children;
  public $permissions;
  /**
   * Constructs the internal representation of the Drive service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->restBasePath = '/drive/v2/';
    $this->version = 'v2';
    $this->serviceName = 'drive';

    $apiClient->addService($this->serviceName, $this->version);
    $this->files = new FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"convert": {"default": "false", "type": "boolean", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"default": "false", "type": "boolean", "location": "query"}, "ocr": {"default": "false", "type": "boolean", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}}, "supportsMediaUpload": true, "request": {"$ref": "File"}, "mediaUpload": {"maxSize": "10GB", "accept": ["*/*"], "protocols": {"simple": {"path": "/upload/drive/v2/files", "multipart": true}, "resumable": {"path": "/resumable/upload/drive/v2/files", "multipart": true}}}, "id": "drive.files.insert", "httpMethod": "POST", "path": "files", "response": {"$ref": "File"}}, "untrash": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.files.untrash", "httpMethod": "POST", "path": "files/{fileId}/untrash", "response": {"$ref": "File"}}, "copy": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"convert": {"default": "false", "type": "boolean", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "fileId": {"required": true, "type": "string", "location": "path"}, "ocrLanguage": {"type": "string", "location": "query"}, "ocr": {"default": "false", "type": "boolean", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}}, "request": {"$ref": "File"}, "id": "drive.files.copy", "httpMethod": "POST", "path": "files/{fileId}/copy", "response": {"$ref": "File"}}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"updateViewedDate": {"default": "false", "type": "boolean", "location": "query"}, "projection": {"enum": ["BASIC", "FULL"], "type": "string", "location": "query"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.files.get", "httpMethod": "GET", "path": "files/{fileId}", "response": {"$ref": "File"}}, "list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"q": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"enum": ["BASIC", "FULL"], "type": "string", "location": "query"}, "maxResults": {"format": "int32", "default": "100", "minimum": "0", "location": "query", "type": "integer"}}, "response": {"$ref": "FileList"}, "httpMethod": "GET", "path": "files", "id": "drive.files.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"convert": {"default": "false", "type": "boolean", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "newRevision": {"default": "true", "type": "boolean", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "fileId": {"required": true, "type": "string", "location": "path"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"default": "false", "type": "boolean", "location": "query"}, "ocr": {"default": "false", "type": "boolean", "location": "query"}, "setModifiedDate": {"default": "false", "type": "boolean", "location": "query"}, "updateViewedDate": {"default": "true", "type": "boolean", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}}, "supportsMediaUpload": true, "request": {"$ref": "File"}, "mediaUpload": {"maxSize": "10GB", "accept": ["*/*"], "protocols": {"simple": {"path": "/upload/drive/v2/files/{fileId}", "multipart": true}, "resumable": {"path": "/resumable/upload/drive/v2/files/{fileId}", "multipart": true}}}, "id": "drive.files.update", "httpMethod": "PUT", "path": "files/{fileId}", "response": {"$ref": "File"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"convert": {"default": "false", "type": "boolean", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "newRevision": {"default": "true", "type": "boolean", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "fileId": {"required": true, "type": "string", "location": "path"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"default": "false", "type": "boolean", "location": "query"}, "ocr": {"default": "false", "type": "boolean", "location": "query"}, "setModifiedDate": {"default": "false", "type": "boolean", "location": "query"}, "updateViewedDate": {"default": "true", "type": "boolean", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}}, "request": {"$ref": "File"}, "id": "drive.files.patch", "httpMethod": "PATCH", "path": "files/{fileId}", "response": {"$ref": "File"}}, "touch": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.files.touch", "httpMethod": "POST", "path": "files/{fileId}/touch", "response": {"$ref": "File"}}, "trash": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.files.trash", "httpMethod": "POST", "path": "files/{fileId}/trash", "response": {"$ref": "File"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "files/{fileId}", "id": "drive.files.delete"}}}', true));
    $this->about = new AboutServiceResource($this, $this->serviceName, 'about', json_decode('{"methods": {"get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"includeSubscribed": {"default": "true", "type": "boolean", "location": "query"}, "maxChangeIdCount": {"default": "1", "format": "uint64", "type": "string", "location": "query"}, "startChangeId": {"format": "uint64", "type": "string", "location": "query"}}, "response": {"$ref": "About"}, "httpMethod": "GET", "path": "about", "id": "drive.about.get"}}}', true));
    $this->apps = new AppsServiceResource($this, $this->serviceName, 'apps', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/drive.apps.readonly"], "id": "drive.apps.list", "httpMethod": "GET", "path": "apps", "response": {"$ref": "AppList"}}}}', true));
    $this->parents = new ParentsServiceResource($this, $this->serviceName, 'parents', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ParentReference"}, "id": "drive.parents.insert", "httpMethod": "POST", "path": "files/{fileId}/parents", "response": {"$ref": "ParentReference"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}, "parentId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "files/{fileId}/parents/{parentId}", "id": "drive.parents.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.parents.list", "httpMethod": "GET", "path": "files/{fileId}/parents", "response": {"$ref": "ParentList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}, "parentId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.parents.get", "httpMethod": "GET", "path": "files/{fileId}/parents/{parentId}", "response": {"$ref": "ParentReference"}}}}', true));
    $this->revisions = new RevisionsServiceResource($this, $this->serviceName, 'revisions', json_decode('{"methods": {"delete": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"revisionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "files/{fileId}/revisions/{revisionId}", "id": "drive.revisions.delete"}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"revisionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.revisions.get", "httpMethod": "GET", "path": "files/{fileId}/revisions/{revisionId}", "response": {"$ref": "Revision"}}, "list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.revisions.list", "httpMethod": "GET", "path": "files/{fileId}/revisions", "response": {"$ref": "RevisionList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"revisionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Revision"}, "id": "drive.revisions.update", "httpMethod": "PUT", "path": "files/{fileId}/revisions/{revisionId}", "response": {"$ref": "Revision"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"revisionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Revision"}, "id": "drive.revisions.patch", "httpMethod": "PATCH", "path": "files/{fileId}/revisions/{revisionId}", "response": {"$ref": "Revision"}}}}', true));
    $this->changes = new ChangesServiceResource($this, $this->serviceName, 'changes', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"includeSubscribed": {"default": "true", "type": "boolean", "location": "query"}, "maxResults": {"format": "int32", "default": "100", "minimum": "0", "location": "query", "type": "integer"}, "includeDeleted": {"default": "true", "type": "boolean", "location": "query"}, "startChangeId": {"format": "uint64", "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "ChangeList"}, "httpMethod": "GET", "path": "changes", "id": "drive.changes.list"}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"changeId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.changes.get", "httpMethod": "GET", "path": "changes/{changeId}", "response": {"$ref": "Change"}}}}', true));
    $this->children = new ChildrenServiceResource($this, $this->serviceName, 'children', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"folderId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "ChildReference"}, "id": "drive.children.insert", "httpMethod": "POST", "path": "files/{folderId}/children", "response": {"$ref": "ChildReference"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"folderId": {"required": true, "type": "string", "location": "path"}, "childId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "files/{folderId}/children/{childId}", "id": "drive.children.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"q": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "folderId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"format": "int32", "default": "100", "minimum": "0", "location": "query", "type": "integer"}}, "id": "drive.children.list", "httpMethod": "GET", "path": "files/{folderId}/children", "response": {"$ref": "ChildList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"folderId": {"required": true, "type": "string", "location": "path"}, "childId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.children.get", "httpMethod": "GET", "path": "files/{folderId}/children/{childId}", "response": {"$ref": "ChildReference"}}}}', true));
    $this->permissions = new PermissionsServiceResource($this, $this->serviceName, 'permissions', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"sendNotificationEmails": {"default": "true", "type": "boolean", "location": "query"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Permission"}, "id": "drive.permissions.insert", "httpMethod": "POST", "path": "files/{fileId}/permissions", "response": {"$ref": "Permission"}}, "get": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"permissionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.permissions.get", "httpMethod": "GET", "path": "files/{fileId}/permissions/{permissionId}", "response": {"$ref": "Permission"}}, "list": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "parameters": {"fileId": {"required": true, "type": "string", "location": "path"}}, "id": "drive.permissions.list", "httpMethod": "GET", "path": "files/{fileId}/permissions", "response": {"$ref": "PermissionList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"permissionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Permission"}, "id": "drive.permissions.update", "httpMethod": "PUT", "path": "files/{fileId}/permissions/{permissionId}", "response": {"$ref": "Permission"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"permissionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Permission"}, "id": "drive.permissions.patch", "httpMethod": "PATCH", "path": "files/{fileId}/permissions/{permissionId}", "response": {"$ref": "Permission"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "parameters": {"permissionId": {"required": true, "type": "string", "location": "path"}, "fileId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "files/{fileId}/permissions/{permissionId}", "id": "drive.permissions.delete"}}}', true));

  }
}

class About extends apiModel {
  public $kind;
  protected $__featuresType = 'AboutFeatures';
  protected $__featuresDataType = 'array';
  public $features;
  public $quotaBytesUsed;
  public $permissionId;
  protected $__maxUploadSizesType = 'AboutMaxUploadSizes';
  protected $__maxUploadSizesDataType = 'array';
  public $maxUploadSizes;
  public $name;
  public $remainingChangeIds;
  protected $__additionalRoleInfoType = 'AboutAdditionalRoleInfo';
  protected $__additionalRoleInfoDataType = 'array';
  public $additionalRoleInfo;
  public $etag;
  protected $__importFormatsType = 'AboutImportFormats';
  protected $__importFormatsDataType = 'array';
  public $importFormats;
  public $quotaBytesTotal;
  public $rootFolderId;
  public $largestChangeId;
  public $quotaBytesUsedInTrash;
  protected $__exportFormatsType = 'AboutExportFormats';
  protected $__exportFormatsDataType = 'array';
  public $exportFormats;
  public $domainSharingPolicy;
  public $selfLink;
  public $isCurrentAppInstalled;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setFeatures(/* array(AboutFeatures) */ $features) {
    $this->assertIsArray($features, 'AboutFeatures', __METHOD__);
    $this->features = $features;
  }
  public function getFeatures() {
    return $this->features;
  }
  public function setQuotaBytesUsed($quotaBytesUsed) {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  public function getQuotaBytesUsed() {
    return $this->quotaBytesUsed;
  }
  public function setPermissionId($permissionId) {
    $this->permissionId = $permissionId;
  }
  public function getPermissionId() {
    return $this->permissionId;
  }
  public function setMaxUploadSizes(/* array(AboutMaxUploadSizes) */ $maxUploadSizes) {
    $this->assertIsArray($maxUploadSizes, 'AboutMaxUploadSizes', __METHOD__);
    $this->maxUploadSizes = $maxUploadSizes;
  }
  public function getMaxUploadSizes() {
    return $this->maxUploadSizes;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setRemainingChangeIds($remainingChangeIds) {
    $this->remainingChangeIds = $remainingChangeIds;
  }
  public function getRemainingChangeIds() {
    return $this->remainingChangeIds;
  }
  public function setAdditionalRoleInfo(/* array(AboutAdditionalRoleInfo) */ $additionalRoleInfo) {
    $this->assertIsArray($additionalRoleInfo, 'AboutAdditionalRoleInfo', __METHOD__);
    $this->additionalRoleInfo = $additionalRoleInfo;
  }
  public function getAdditionalRoleInfo() {
    return $this->additionalRoleInfo;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setImportFormats(/* array(AboutImportFormats) */ $importFormats) {
    $this->assertIsArray($importFormats, 'AboutImportFormats', __METHOD__);
    $this->importFormats = $importFormats;
  }
  public function getImportFormats() {
    return $this->importFormats;
  }
  public function setQuotaBytesTotal($quotaBytesTotal) {
    $this->quotaBytesTotal = $quotaBytesTotal;
  }
  public function getQuotaBytesTotal() {
    return $this->quotaBytesTotal;
  }
  public function setRootFolderId($rootFolderId) {
    $this->rootFolderId = $rootFolderId;
  }
  public function getRootFolderId() {
    return $this->rootFolderId;
  }
  public function setLargestChangeId($largestChangeId) {
    $this->largestChangeId = $largestChangeId;
  }
  public function getLargestChangeId() {
    return $this->largestChangeId;
  }
  public function setQuotaBytesUsedInTrash($quotaBytesUsedInTrash) {
    $this->quotaBytesUsedInTrash = $quotaBytesUsedInTrash;
  }
  public function getQuotaBytesUsedInTrash() {
    return $this->quotaBytesUsedInTrash;
  }
  public function setExportFormats(/* array(AboutExportFormats) */ $exportFormats) {
    $this->assertIsArray($exportFormats, 'AboutExportFormats', __METHOD__);
    $this->exportFormats = $exportFormats;
  }
  public function getExportFormats() {
    return $this->exportFormats;
  }
  public function setDomainSharingPolicy($domainSharingPolicy) {
    $this->domainSharingPolicy = $domainSharingPolicy;
  }
  public function getDomainSharingPolicy() {
    return $this->domainSharingPolicy;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setIsCurrentAppInstalled($isCurrentAppInstalled) {
    $this->isCurrentAppInstalled = $isCurrentAppInstalled;
  }
  public function getIsCurrentAppInstalled() {
    return $this->isCurrentAppInstalled;
  }
}

class AboutAdditionalRoleInfo extends apiModel {
  protected $__roleSetsType = 'AboutAdditionalRoleInfoRoleSets';
  protected $__roleSetsDataType = 'array';
  public $roleSets;
  public $type;
  public function setRoleSets(/* array(AboutAdditionalRoleInfoRoleSets) */ $roleSets) {
    $this->assertIsArray($roleSets, 'AboutAdditionalRoleInfoRoleSets', __METHOD__);
    $this->roleSets = $roleSets;
  }
  public function getRoleSets() {
    return $this->roleSets;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class AboutAdditionalRoleInfoRoleSets extends apiModel {
  public $primaryRole;
  public $additionalRoles;
  public function setPrimaryRole($primaryRole) {
    $this->primaryRole = $primaryRole;
  }
  public function getPrimaryRole() {
    return $this->primaryRole;
  }
  public function setAdditionalRoles(/* array(string) */ $additionalRoles) {
    $this->assertIsArray($additionalRoles, 'string', __METHOD__);
    $this->additionalRoles = $additionalRoles;
  }
  public function getAdditionalRoles() {
    return $this->additionalRoles;
  }
}

class AboutExportFormats extends apiModel {
  public $source;
  public $targets;
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setTargets(/* array(string) */ $targets) {
    $this->assertIsArray($targets, 'string', __METHOD__);
    $this->targets = $targets;
  }
  public function getTargets() {
    return $this->targets;
  }
}

class AboutFeatures extends apiModel {
  public $featureName;
  public $featureRate;
  public function setFeatureName($featureName) {
    $this->featureName = $featureName;
  }
  public function getFeatureName() {
    return $this->featureName;
  }
  public function setFeatureRate($featureRate) {
    $this->featureRate = $featureRate;
  }
  public function getFeatureRate() {
    return $this->featureRate;
  }
}

class AboutImportFormats extends apiModel {
  public $source;
  public $targets;
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setTargets(/* array(string) */ $targets) {
    $this->assertIsArray($targets, 'string', __METHOD__);
    $this->targets = $targets;
  }
  public function getTargets() {
    return $this->targets;
  }
}

class AboutMaxUploadSizes extends apiModel {
  public $type;
  public $size;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
}

class App extends apiModel {
  public $kind;
  public $primaryFileExtensions;
  public $name;
  protected $__iconsType = 'AppIcons';
  protected $__iconsDataType = 'array';
  public $icons;
  public $secondaryFileExtensions;
  public $installed;
  public $productUrl;
  public $secondaryMimeTypes;
  public $authorized;
  public $supportsCreate;
  public $supportsImport;
  public $primaryMimeTypes;
  public $id;
  public $objectType;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPrimaryFileExtensions(/* array(string) */ $primaryFileExtensions) {
    $this->assertIsArray($primaryFileExtensions, 'string', __METHOD__);
    $this->primaryFileExtensions = $primaryFileExtensions;
  }
  public function getPrimaryFileExtensions() {
    return $this->primaryFileExtensions;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setIcons(/* array(AppIcons) */ $icons) {
    $this->assertIsArray($icons, 'AppIcons', __METHOD__);
    $this->icons = $icons;
  }
  public function getIcons() {
    return $this->icons;
  }
  public function setSecondaryFileExtensions(/* array(string) */ $secondaryFileExtensions) {
    $this->assertIsArray($secondaryFileExtensions, 'string', __METHOD__);
    $this->secondaryFileExtensions = $secondaryFileExtensions;
  }
  public function getSecondaryFileExtensions() {
    return $this->secondaryFileExtensions;
  }
  public function setInstalled($installed) {
    $this->installed = $installed;
  }
  public function getInstalled() {
    return $this->installed;
  }
  public function setProductUrl($productUrl) {
    $this->productUrl = $productUrl;
  }
  public function getProductUrl() {
    return $this->productUrl;
  }
  public function setSecondaryMimeTypes(/* array(string) */ $secondaryMimeTypes) {
    $this->assertIsArray($secondaryMimeTypes, 'string', __METHOD__);
    $this->secondaryMimeTypes = $secondaryMimeTypes;
  }
  public function getSecondaryMimeTypes() {
    return $this->secondaryMimeTypes;
  }
  public function setAuthorized($authorized) {
    $this->authorized = $authorized;
  }
  public function getAuthorized() {
    return $this->authorized;
  }
  public function setSupportsCreate($supportsCreate) {
    $this->supportsCreate = $supportsCreate;
  }
  public function getSupportsCreate() {
    return $this->supportsCreate;
  }
  public function setSupportsImport($supportsImport) {
    $this->supportsImport = $supportsImport;
  }
  public function getSupportsImport() {
    return $this->supportsImport;
  }
  public function setPrimaryMimeTypes(/* array(string) */ $primaryMimeTypes) {
    $this->assertIsArray($primaryMimeTypes, 'string', __METHOD__);
    $this->primaryMimeTypes = $primaryMimeTypes;
  }
  public function getPrimaryMimeTypes() {
    return $this->primaryMimeTypes;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
}

class AppIcons extends apiModel {
  public $category;
  public $iconUrl;
  public $size;
  public function setCategory($category) {
    $this->category = $category;
  }
  public function getCategory() {
    return $this->category;
  }
  public function setIconUrl($iconUrl) {
    $this->iconUrl = $iconUrl;
  }
  public function getIconUrl() {
    return $this->iconUrl;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
}

class AppList extends apiModel {
  protected $__itemsType = 'App';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public $selfLink;
  public function setItems(/* array(App) */ $items) {
    $this->assertIsArray($items, 'App', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Change extends apiModel {
  public $kind;
  public $deleted;
  protected $__fileType = 'DriveFile';
  protected $__fileDataType = '';
  public $file;
  public $id;
  public $selfLink;
  public $fileId;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setFile(DriveFile $file) {
    $this->file = $file;
  }
  public function getFile() {
    return $this->file;
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
  public function setFileId($fileId) {
    $this->fileId = $fileId;
  }
  public function getFileId() {
    return $this->fileId;
  }
}

class ChangeList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'Change';
  protected $__itemsDataType = 'array';
  public $items;
  public $nextLink;
  public $etag;
  public $largestChangeId;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(Change) */ $items) {
    $this->assertIsArray($items, 'Change', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setLargestChangeId($largestChangeId) {
    $this->largestChangeId = $largestChangeId;
  }
  public function getLargestChangeId() {
    return $this->largestChangeId;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ChildList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'ChildReference';
  protected $__itemsDataType = 'array';
  public $items;
  public $nextLink;
  public $etag;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(ChildReference) */ $items) {
    $this->assertIsArray($items, 'ChildReference', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ChildReference extends apiModel {
  public $kind;
  public $childLink;
  public $id;
  public $selfLink;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setChildLink($childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
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

class DriveFile extends apiModel {
  public $mimeType;
  public $thumbnailLink;
  protected $__labelsType = 'DriveFileLabels';
  protected $__labelsDataType = '';
  public $labels;
  protected $__indexableTextType = 'DriveFileIndexableText';
  protected $__indexableTextDataType = '';
  public $indexableText;
  public $etag;
  public $lastModifyingUserName;
  public $writersCanShare;
  public $id;
  public $title;
  public $ownerNames;
  public $sharedWithMeDate;
  public $lastViewedByMeDate;
  protected $__parentsType = 'ParentReference';
  protected $__parentsDataType = 'array';
  public $parents;
  public $exportLinks;
  public $originalFilename;
  public $description;
  public $editable;
  public $kind;
  public $quotaBytesUsed;
  public $fileSize;
  public $createdDate;
  public $md5Checksum;
  public $embedLink;
  public $alternateLink;
  public $permissionsLink;
  public $modifiedByMeDate;
  public $downloadUrl;
  protected $__userPermissionType = 'Permission';
  protected $__userPermissionDataType = '';
  public $userPermission;
  public $fileExtension;
  public $selfLink;
  public $modifiedDate;
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
  public function setThumbnailLink($thumbnailLink) {
    $this->thumbnailLink = $thumbnailLink;
  }
  public function getThumbnailLink() {
    return $this->thumbnailLink;
  }
  public function setLabels(DriveFileLabels $labels) {
    $this->labels = $labels;
  }
  public function getLabels() {
    return $this->labels;
  }
  public function setIndexableText(DriveFileIndexableText $indexableText) {
    $this->indexableText = $indexableText;
  }
  public function getIndexableText() {
    return $this->indexableText;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setLastModifyingUserName($lastModifyingUserName) {
    $this->lastModifyingUserName = $lastModifyingUserName;
  }
  public function getLastModifyingUserName() {
    return $this->lastModifyingUserName;
  }
  public function setWritersCanShare($writersCanShare) {
    $this->writersCanShare = $writersCanShare;
  }
  public function getWritersCanShare() {
    return $this->writersCanShare;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setOwnerNames(/* array(string) */ $ownerNames) {
    $this->assertIsArray($ownerNames, 'string', __METHOD__);
    $this->ownerNames = $ownerNames;
  }
  public function getOwnerNames() {
    return $this->ownerNames;
  }
  public function setSharedWithMeDate($sharedWithMeDate) {
    $this->sharedWithMeDate = $sharedWithMeDate;
  }
  public function getSharedWithMeDate() {
    return $this->sharedWithMeDate;
  }
  public function setLastViewedByMeDate($lastViewedByMeDate) {
    $this->lastViewedByMeDate = $lastViewedByMeDate;
  }
  public function getLastViewedByMeDate() {
    return $this->lastViewedByMeDate;
  }
  public function setParents(/* array(ParentReference) */ $parents) {
    $this->assertIsArray($parents, 'ParentReference', __METHOD__);
    $this->parents = $parents;
  }
  public function getParents() {
    return $this->parents;
  }
  public function setExportLinks($exportLinks) {
    $this->exportLinks = $exportLinks;
  }
  public function getExportLinks() {
    return $this->exportLinks;
  }
  public function setOriginalFilename($originalFilename) {
    $this->originalFilename = $originalFilename;
  }
  public function getOriginalFilename() {
    return $this->originalFilename;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEditable($editable) {
    $this->editable = $editable;
  }
  public function getEditable() {
    return $this->editable;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setQuotaBytesUsed($quotaBytesUsed) {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  public function getQuotaBytesUsed() {
    return $this->quotaBytesUsed;
  }
  public function setFileSize($fileSize) {
    $this->fileSize = $fileSize;
  }
  public function getFileSize() {
    return $this->fileSize;
  }
  public function setCreatedDate($createdDate) {
    $this->createdDate = $createdDate;
  }
  public function getCreatedDate() {
    return $this->createdDate;
  }
  public function setMd5Checksum($md5Checksum) {
    $this->md5Checksum = $md5Checksum;
  }
  public function getMd5Checksum() {
    return $this->md5Checksum;
  }
  public function setEmbedLink($embedLink) {
    $this->embedLink = $embedLink;
  }
  public function getEmbedLink() {
    return $this->embedLink;
  }
  public function setAlternateLink($alternateLink) {
    $this->alternateLink = $alternateLink;
  }
  public function getAlternateLink() {
    return $this->alternateLink;
  }
  public function setPermissionsLink($permissionsLink) {
    $this->permissionsLink = $permissionsLink;
  }
  public function getPermissionsLink() {
    return $this->permissionsLink;
  }
  public function setModifiedByMeDate($modifiedByMeDate) {
    $this->modifiedByMeDate = $modifiedByMeDate;
  }
  public function getModifiedByMeDate() {
    return $this->modifiedByMeDate;
  }
  public function setDownloadUrl($downloadUrl) {
    $this->downloadUrl = $downloadUrl;
  }
  public function getDownloadUrl() {
    return $this->downloadUrl;
  }
  public function setUserPermission(Permission $userPermission) {
    $this->userPermission = $userPermission;
  }
  public function getUserPermission() {
    return $this->userPermission;
  }
  public function setFileExtension($fileExtension) {
    $this->fileExtension = $fileExtension;
  }
  public function getFileExtension() {
    return $this->fileExtension;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
}

class DriveFileIndexableText extends apiModel {
  public $text;
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
}

class DriveFileLabels extends apiModel {
  public $restricted;
  public $hidden;
  public $viewed;
  public $starred;
  public $trashed;
  public function setRestricted($restricted) {
    $this->restricted = $restricted;
  }
  public function getRestricted() {
    return $this->restricted;
  }
  public function setHidden($hidden) {
    $this->hidden = $hidden;
  }
  public function getHidden() {
    return $this->hidden;
  }
  public function setViewed($viewed) {
    $this->viewed = $viewed;
  }
  public function getViewed() {
    return $this->viewed;
  }
  public function setStarred($starred) {
    $this->starred = $starred;
  }
  public function getStarred() {
    return $this->starred;
  }
  public function setTrashed($trashed) {
    $this->trashed = $trashed;
  }
  public function getTrashed() {
    return $this->trashed;
  }
}

class FileList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'DriveFile';
  protected $__itemsDataType = 'array';
  public $items;
  public $nextLink;
  public $etag;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(DriveFile) */ $items) {
    $this->assertIsArray($items, 'DriveFile', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ParentList extends apiModel {
  protected $__itemsType = 'ParentReference';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public $selfLink;
  public function setItems(/* array(ParentReference) */ $items) {
    $this->assertIsArray($items, 'ParentReference', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ParentReference extends apiModel {
  public $selfLink;
  public $kind;
  public $id;
  public $isRoot;
  public $parentLink;
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
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
  public function setIsRoot($isRoot) {
    $this->isRoot = $isRoot;
  }
  public function getIsRoot() {
    return $this->isRoot;
  }
  public function setParentLink($parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
}

class Permission extends apiModel {
  public $withLink;
  public $kind;
  public $name;
  public $value;
  public $id;
  public $authKey;
  public $etag;
  public $role;
  public $photoLink;
  public $type;
  public $additionalRoles;
  public $selfLink;
  public function setWithLink($withLink) {
    $this->withLink = $withLink;
  }
  public function getWithLink() {
    return $this->withLink;
  }
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
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAuthKey($authKey) {
    $this->authKey = $authKey;
  }
  public function getAuthKey() {
    return $this->authKey;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setPhotoLink($photoLink) {
    $this->photoLink = $photoLink;
  }
  public function getPhotoLink() {
    return $this->photoLink;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setAdditionalRoles(/* array(string) */ $additionalRoles) {
    $this->assertIsArray($additionalRoles, 'string', __METHOD__);
    $this->additionalRoles = $additionalRoles;
  }
  public function getAdditionalRoles() {
    return $this->additionalRoles;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class PermissionList extends apiModel {
  protected $__itemsType = 'Permission';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public $selfLink;
  public function setItems(/* array(Permission) */ $items) {
    $this->assertIsArray($items, 'Permission', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Revision extends apiModel {
  public $mimeType;
  public $pinned;
  public $kind;
  public $publishedLink;
  public $publishedOutsideDomain;
  public $publishAuto;
  public $published;
  public $downloadUrl;
  public $selfLink;
  public $etag;
  public $fileSize;
  public $exportLinks;
  public $lastModifyingUserName;
  public $originalFilename;
  public $id;
  public $md5Checksum;
  public $modifiedDate;
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
  public function setPinned($pinned) {
    $this->pinned = $pinned;
  }
  public function getPinned() {
    return $this->pinned;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPublishedLink($publishedLink) {
    $this->publishedLink = $publishedLink;
  }
  public function getPublishedLink() {
    return $this->publishedLink;
  }
  public function setPublishedOutsideDomain($publishedOutsideDomain) {
    $this->publishedOutsideDomain = $publishedOutsideDomain;
  }
  public function getPublishedOutsideDomain() {
    return $this->publishedOutsideDomain;
  }
  public function setPublishAuto($publishAuto) {
    $this->publishAuto = $publishAuto;
  }
  public function getPublishAuto() {
    return $this->publishAuto;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setDownloadUrl($downloadUrl) {
    $this->downloadUrl = $downloadUrl;
  }
  public function getDownloadUrl() {
    return $this->downloadUrl;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileSize($fileSize) {
    $this->fileSize = $fileSize;
  }
  public function getFileSize() {
    return $this->fileSize;
  }
  public function setExportLinks($exportLinks) {
    $this->exportLinks = $exportLinks;
  }
  public function getExportLinks() {
    return $this->exportLinks;
  }
  public function setLastModifyingUserName($lastModifyingUserName) {
    $this->lastModifyingUserName = $lastModifyingUserName;
  }
  public function getLastModifyingUserName() {
    return $this->lastModifyingUserName;
  }
  public function setOriginalFilename($originalFilename) {
    $this->originalFilename = $originalFilename;
  }
  public function getOriginalFilename() {
    return $this->originalFilename;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setMd5Checksum($md5Checksum) {
    $this->md5Checksum = $md5Checksum;
  }
  public function getMd5Checksum() {
    return $this->md5Checksum;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
}

class RevisionList extends apiModel {
  protected $__itemsType = 'Revision';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public $selfLink;
  public function setItems(/* array(Revision) */ $items) {
    $this->assertIsArray($items, 'Revision', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}
