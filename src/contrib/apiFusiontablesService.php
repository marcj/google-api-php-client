<?php
/*
 * Copyright 2010 Google Inc.
 *
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
   * The "column" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new apiFusiontablesService(...);
   *   $column = $fusiontablesService->column;
   *  </code>
   */
  class ColumnServiceResource extends apiServiceResource {


    /**
     * Adds a new column to the table. (column.insert)
     *
     * @param string $tableId Table for which a new column is being added.
     * @param Column $postBody
     * @return Column
     */
    public function insert($tableId, Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific column by its id. (column.get)
     *
     * @param string $tableId Table to which the column belongs.
     * @param string $columnId Name or identifier for the column that is being requested.
     * @return Column
     */
    public function get($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of columns. (column.list)
     *
     * @param string $tableId Table whose columns are being listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of columns to return. Optional. Default is 5.
     * @return ColumnList
     */
    public function listColumn($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ColumnList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. (column.update)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param Column $postBody
     * @return Column
     */
    public function update($tableId, $columnId, Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. This method supports patch semantics.
     * (column.patch)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param Column $postBody
     * @return Column
     */
    public function patch($tableId, $columnId, Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the column. (column.delete)
     *
     * @param string $tableId Table from which the column is being deleted.
     * @param string $columnId Name or identifier for the column being deleted.
     */
    public function delete($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "query" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new apiFusiontablesService(...);
   *   $query = $fusiontablesService->query;
   *  </code>
   */
  class QueryServiceResource extends apiServiceResource {


    /**
     * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE statement.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @return Sqlresponse
     */
    public function sqlGet($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sqlGet', array($params));
      if ($this->useObjects()) {
        return new Sqlresponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE statement. (query.sql)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE statement.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @return Sqlresponse
     */
    public function sql($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sql', array($params));
      if ($this->useObjects()) {
        return new Sqlresponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "style" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new apiFusiontablesService(...);
   *   $style = $fusiontablesService->style;
   *  </code>
   */
  class StyleServiceResource extends apiServiceResource {


    /**
     * Adds a new style for the table. (style.insert)
     *
     * @param string $tableId Table for which a new style is being added
     * @param StyleSetting $postBody
     * @return StyleSetting
     */
    public function insert($tableId, StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific style. (style.get)
     *
     * @param string $tableId Table to which the requested style belongs
     * @param int $styleId Identifier (integer) for a specific style in a table
     * @return StyleSetting
     */
    public function get($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of styles. (style.list)
     *
     * @param string $tableId Table whose styles are being listed
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @return StyleSettingList
     */
    public function listStyle($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new StyleSettingList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. (style.update)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param StyleSetting $postBody
     * @return StyleSetting
     */
    public function update($tableId, $styleId, StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. This method supports patch semantics. (style.patch)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param StyleSetting $postBody
     * @return StyleSetting
     */
    public function patch($tableId, $styleId, StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a style. (style.delete)
     *
     * @param string $tableId Table from which the style is being deleted
     * @param int $styleId Identifier (within a table) for the style being deleted
     */
    public function delete($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "template" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new apiFusiontablesService(...);
   *   $template = $fusiontablesService->template;
   *  </code>
   */
  class TemplateServiceResource extends apiServiceResource {


    /**
     * Creates a new template for the table. (template.insert)
     *
     * @param string $tableId Table for which a new template is being created
     * @param Template $postBody
     * @return Template
     */
    public function insert($tableId, Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific template by its id (template.get)
     *
     * @param string $tableId Table to which the template belongs
     * @param int $templateId Identifier for the template that is being requested
     * @return Template
     */
    public function get($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of templates. (template.list)
     *
     * @param string $tableId Identifier for the table whose templates are being requested
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken Continuation token specifying which results page to return. Optional.
     * @opt_param string maxResults Maximum number of templates to return. Optional. Default is 5.
     * @return TemplateList
     */
    public function listTemplate($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new TemplateList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template (template.update)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param Template $postBody
     * @return Template
     */
    public function update($tableId, $templateId, Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template. This method supports patch semantics. (template.patch)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param Template $postBody
     * @return Template
     */
    public function patch($tableId, $templateId, Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a template (template.delete)
     *
     * @param string $tableId Table from which the template is being deleted
     * @param int $templateId Identifier for the template which is being deleted
     */
    public function delete($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "table" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new apiFusiontablesService(...);
   *   $table = $fusiontablesService->table;
   *  </code>
   */
  class TableServiceResource extends apiServiceResource {


    /**
     * Creates a new table. (table.insert)
     *
     * @param Table $postBody
     * @return Table
     */
    public function insert(Table $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific table by its id. (table.get)
     *
     * @param string $tableId Identifier(ID) for the table being requested.
     * @return Table
     */
    public function get($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of tables a user owns. (table.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @return TableList
     */
    public function listTable($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new TableList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. (table.update)
     *
     * @param string $tableId Id of the table that is being updated.
     * @param Table $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return Table
     */
    public function update($tableId, Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. This method supports patch semantics. (table.patch)
     *
     * @param string $tableId Id of the table that is being updated.
     * @param Table $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return Table
     */
    public function patch($tableId, Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a table. (table.delete)
     *
     * @param string $tableId Id of the table that is being deleted.
     */
    public function delete($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

/**
 * Service definition for Fusiontables (v1).
 *
 * <p>
 * API for working with Fusion Tables data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/fusiontables" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiFusiontablesService extends apiService {
  public $column;
  public $query;
  public $style;
  public $template;
  public $table;
  /**
   * Constructs the internal representation of the Fusiontables service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->restBasePath = '/fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $apiClient->addService($this->serviceName, $this->version);
    $this->column = new ColumnServiceResource($this, $this->serviceName, 'column', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "id": "fusiontables.column.insert", "httpMethod": "POST", "path": "tables/{tableId}/columns", "response": {"$ref": "Column"}}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "Column"}, "httpMethod": "GET", "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.get"}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "ColumnList"}, "httpMethod": "GET", "path": "tables/{tableId}/columns", "id": "fusiontables.column.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "id": "fusiontables.column.update", "httpMethod": "PUT", "path": "tables/{tableId}/columns/{columnId}", "response": {"$ref": "Column"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "id": "fusiontables.column.patch", "httpMethod": "PATCH", "path": "tables/{tableId}/columns/{columnId}", "response": {"$ref": "Column"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->query = new QueryServiceResource($this, $this->serviceName, 'query', json_decode('{"methods": {"sqlGet": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "response": {"$ref": "Sqlresponse"}, "httpMethod": "GET", "path": "query", "id": "fusiontables.query.sqlGet"}, "sql": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "response": {"$ref": "Sqlresponse"}, "httpMethod": "POST", "path": "query", "id": "fusiontables.query.sql"}}}', true));
    $this->style = new StyleServiceResource($this, $this->serviceName, 'style', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "StyleSetting"}, "id": "fusiontables.style.insert", "httpMethod": "POST", "path": "tables/{tableId}/styles", "response": {"$ref": "StyleSetting"}}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "response": {"$ref": "StyleSetting"}, "httpMethod": "GET", "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.get"}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "StyleSettingList"}, "httpMethod": "GET", "path": "tables/{tableId}/styles", "id": "fusiontables.style.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "id": "fusiontables.style.update", "httpMethod": "PUT", "path": "tables/{tableId}/styles/{styleId}", "response": {"$ref": "StyleSetting"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "id": "fusiontables.style.patch", "httpMethod": "PATCH", "path": "tables/{tableId}/styles/{styleId}", "response": {"$ref": "StyleSetting"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->template = new TemplateServiceResource($this, $this->serviceName, 'template', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Template"}, "id": "fusiontables.template.insert", "httpMethod": "POST", "path": "tables/{tableId}/templates", "response": {"$ref": "Template"}}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "response": {"$ref": "Template"}, "httpMethod": "GET", "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.get"}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "TemplateList"}, "httpMethod": "GET", "path": "tables/{tableId}/templates", "id": "fusiontables.template.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "id": "fusiontables.template.update", "httpMethod": "PUT", "path": "tables/{tableId}/templates/{templateId}", "response": {"$ref": "Template"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "id": "fusiontables.template.patch", "httpMethod": "PATCH", "path": "tables/{tableId}/templates/{templateId}", "response": {"$ref": "Template"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->table = new TableServiceResource($this, $this->serviceName, 'table', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "request": {"$ref": "Table"}, "id": "fusiontables.table.insert", "httpMethod": "POST", "path": "tables", "response": {"$ref": "Table"}}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "response": {"$ref": "Table"}, "httpMethod": "GET", "path": "tables/{tableId}", "id": "fusiontables.table.get"}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.table.list", "httpMethod": "GET", "path": "tables", "response": {"$ref": "TableList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "id": "fusiontables.table.update", "httpMethod": "PUT", "path": "tables/{tableId}", "response": {"$ref": "Table"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "id": "fusiontables.table.patch", "httpMethod": "PATCH", "path": "tables/{tableId}", "response": {"$ref": "Table"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}", "id": "fusiontables.table.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class Bucket extends apiModel {
  public $opacity;
  public $weight;
  public $min;
  public $color;
  public $max;
  public $icon;
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
  public function setWeight($weight) {
    $this->weight = $weight;
  }
  public function getWeight() {
    return $this->weight;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setIcon($icon) {
    $this->icon = $icon;
  }
  public function getIcon() {
    return $this->icon;
  }
}

class Column extends apiModel {
  public $kind;
  public $type;
  public $columnId;
  public $name;
  protected $__baseColumnType = 'ColumnBaseColumn';
  protected $__baseColumnDataType = '';
  public $baseColumn;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setBaseColumn(ColumnBaseColumn $baseColumn) {
    $this->baseColumn = $baseColumn;
  }
  public function getBaseColumn() {
    return $this->baseColumn;
  }
}

class ColumnBaseColumn extends apiModel {
  public $tableIndex;
  public $columnId;
  public function setTableIndex($tableIndex) {
    $this->tableIndex = $tableIndex;
  }
  public function getTableIndex() {
    return $this->tableIndex;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
}

class ColumnList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Column';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Column) */ $items) {
    $this->assertIsArray($items, 'Column', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class Geometry extends apiModel {
  public $geometry;
  public $type;
  public $geometries;
  public function setGeometry($geometry) {
    $this->geometry = $geometry;
  }
  public function getGeometry() {
    return $this->geometry;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setGeometries(/* array(object) */ $geometries) {
    $this->assertIsArray($geometries, 'object', __METHOD__);
    $this->geometries = $geometries;
  }
  public function getGeometries() {
    return $this->geometries;
  }
}

class Line extends apiModel {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class LineStyle extends apiModel {
  public $strokeWeight;
  protected $__strokeWeightStylerType = 'StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  public $strokeColor;
  public $strokeOpacity;
  protected $__strokeColorStylerType = 'StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeWeightStyler(StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeColorStyler(StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
}

class Point extends apiModel {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class PointStyle extends apiModel {
  protected $__iconStylerType = 'StyleFunction';
  protected $__iconStylerDataType = '';
  public $iconStyler;
  public $iconName;
  public function setIconStyler(StyleFunction $iconStyler) {
    $this->iconStyler = $iconStyler;
  }
  public function getIconStyler() {
    return $this->iconStyler;
  }
  public function setIconName($iconName) {
    $this->iconName = $iconName;
  }
  public function getIconName() {
    return $this->iconName;
  }
}

class Polygon extends apiModel {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class PolygonStyle extends apiModel {
  protected $__strokeColorStylerType = 'StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public $strokeWeight;
  public $strokeOpacity;
  protected $__strokeWeightStylerType = 'StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  protected $__fillColorStylerType = 'StyleFunction';
  protected $__fillColorStylerDataType = '';
  public $fillColorStyler;
  public $fillColor;
  public $strokeColor;
  public $fillOpacity;
  public function setStrokeColorStyler(StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeWeightStyler(StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setFillColorStyler(StyleFunction $fillColorStyler) {
    $this->fillColorStyler = $fillColorStyler;
  }
  public function getFillColorStyler() {
    return $this->fillColorStyler;
  }
  public function setFillColor($fillColor) {
    $this->fillColor = $fillColor;
  }
  public function getFillColor() {
    return $this->fillColor;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setFillOpacity($fillOpacity) {
    $this->fillOpacity = $fillOpacity;
  }
  public function getFillOpacity() {
    return $this->fillOpacity;
  }
}

class Sqlresponse extends apiModel {
  public $kind;
  public $rows;
  public $columns;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows(/* array(object) */ $rows) {
    $this->assertIsArray($rows, 'object', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setColumns(/* array(string) */ $columns) {
    $this->assertIsArray($columns, 'string', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
}

class StyleFunction extends apiModel {
  protected $__gradientType = 'StyleFunctionGradient';
  protected $__gradientDataType = '';
  public $gradient;
  public $columnName;
  protected $__bucketsType = 'Bucket';
  protected $__bucketsDataType = 'array';
  public $buckets;
  public $kind;
  public function setGradient(StyleFunctionGradient $gradient) {
    $this->gradient = $gradient;
  }
  public function getGradient() {
    return $this->gradient;
  }
  public function setColumnName($columnName) {
    $this->columnName = $columnName;
  }
  public function getColumnName() {
    return $this->columnName;
  }
  public function setBuckets(/* array(Bucket) */ $buckets) {
    $this->assertIsArray($buckets, 'Bucket', __METHOD__);
    $this->buckets = $buckets;
  }
  public function getBuckets() {
    return $this->buckets;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class StyleFunctionGradient extends apiModel {
  public $max;
  protected $__colorsType = 'StyleFunctionGradientColors';
  protected $__colorsDataType = 'array';
  public $colors;
  public $min;
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setColors(/* array(StyleFunctionGradientColors) */ $colors) {
    $this->assertIsArray($colors, 'StyleFunctionGradientColors', __METHOD__);
    $this->colors = $colors;
  }
  public function getColors() {
    return $this->colors;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
}

class StyleFunctionGradientColors extends apiModel {
  public $color;
  public $opacity;
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
}

class StyleSetting extends apiModel {
  protected $__markerOptionsType = 'PointStyle';
  protected $__markerOptionsDataType = '';
  public $markerOptions;
  public $kind;
  public $name;
  protected $__polygonOptionsType = 'PolygonStyle';
  protected $__polygonOptionsDataType = '';
  public $polygonOptions;
  public $isDefaultForTable;
  protected $__polylineOptionsType = 'LineStyle';
  protected $__polylineOptionsDataType = '';
  public $polylineOptions;
  public $tableId;
  public $styleId;
  public function setMarkerOptions(PointStyle $markerOptions) {
    $this->markerOptions = $markerOptions;
  }
  public function getMarkerOptions() {
    return $this->markerOptions;
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
  public function setPolygonOptions(PolygonStyle $polygonOptions) {
    $this->polygonOptions = $polygonOptions;
  }
  public function getPolygonOptions() {
    return $this->polygonOptions;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setPolylineOptions(LineStyle $polylineOptions) {
    $this->polylineOptions = $polylineOptions;
  }
  public function getPolylineOptions() {
    return $this->polylineOptions;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setStyleId($styleId) {
    $this->styleId = $styleId;
  }
  public function getStyleId() {
    return $this->styleId;
  }
}

class StyleSettingList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'StyleSetting';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(StyleSetting) */ $items) {
    $this->assertIsArray($items, 'StyleSetting', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class Table extends apiModel {
  public $kind;
  public $attribution;
  public $description;
  public $isExportable;
  public $baseTableIds;
  public $attributionLink;
  public $tableId;
  protected $__columnsType = 'Column';
  protected $__columnsDataType = 'array';
  public $columns;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAttribution($attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setIsExportable($isExportable) {
    $this->isExportable = $isExportable;
  }
  public function getIsExportable() {
    return $this->isExportable;
  }
  public function setBaseTableIds(/* array(string) */ $baseTableIds) {
    $this->assertIsArray($baseTableIds, 'string', __METHOD__);
    $this->baseTableIds = $baseTableIds;
  }
  public function getBaseTableIds() {
    return $this->baseTableIds;
  }
  public function setAttributionLink($attributionLink) {
    $this->attributionLink = $attributionLink;
  }
  public function getAttributionLink() {
    return $this->attributionLink;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setColumns(/* array(Column) */ $columns) {
    $this->assertIsArray($columns, 'Column', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class TableList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Table';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Table) */ $items) {
    $this->assertIsArray($items, 'Table', __METHOD__);
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

class Template extends apiModel {
  public $body;
  public $kind;
  public $name;
  public $automaticColumnNames;
  public $isDefaultForTable;
  public $tableId;
  public $templateId;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
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
  public function setAutomaticColumnNames(/* array(string) */ $automaticColumnNames) {
    $this->assertIsArray($automaticColumnNames, 'string', __METHOD__);
    $this->automaticColumnNames = $automaticColumnNames;
  }
  public function getAutomaticColumnNames() {
    return $this->automaticColumnNames;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setTemplateId($templateId) {
    $this->templateId = $templateId;
  }
  public function getTemplateId() {
    return $this->templateId;
  }
}

class TemplateList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Template';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Template) */ $items) {
    $this->assertIsArray($items, 'Template', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}
