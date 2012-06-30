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
   * The "operations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $operations = $computeService->operations;
   *  </code>
   */
  class OperationsServiceResource extends apiServiceResource {


    /**
     * Retrieves the specified operation resource. (operations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @return Operation
     */
    public function get($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified project.
     * (operations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return OperationList
     */
    public function listOperations($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new OperationList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified operation resource. (operations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to delete.
     */
    public function delete($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "kernels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $kernels = $computeService->kernels;
   *  </code>
   */
  class KernelsServiceResource extends apiServiceResource {


    /**
     * Retrieves the list of kernel resources available to the specified project. (kernels.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return KernelList
     */
    public function listKernels($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new KernelList($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified kernel resource. (kernels.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $kernel Name of the kernel resource to return.
     * @return Kernel
     */
    public function get($project, $kernel, $optParams = array()) {
      $params = array('project' => $project, 'kernel' => $kernel);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Kernel($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "disks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $disks = $computeService->disks;
   *  </code>
   */
  class DisksServiceResource extends apiServiceResource {


    /**
     * Creates a persistent disk resource in the specified project using the data included in the
     * request. (disks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Disk $postBody
     * @return Operation
     */
    public function insert($project, Disk $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk resource. (disks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $disk Name of the persistent disk resource to return.
     * @return Disk
     */
    public function get($project, $disk, $optParams = array()) {
      $params = array('project' => $project, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Disk($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk resources contained within the specified project.
     * (disks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return DiskList
     */
    public function listDisks($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new DiskList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified persistent disk resource. (disks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @return Operation
     */
    public function delete($project, $disk, $optParams = array()) {
      $params = array('project' => $project, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "snapshots" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $snapshots = $computeService->snapshots;
   *  </code>
   */
  class SnapshotsServiceResource extends apiServiceResource {


    /**
     * Creates a persistent disk snapshot resource in the specified project using the data included in
     * the request. (snapshots.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Snapshot $postBody
     * @return Operation
     */
    public function insert($project, Snapshot $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk snapshot resource. (snapshots.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to return.
     * @return Snapshot
     */
    public function get($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Snapshot($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk snapshot resources contained within the specified project.
     * (snapshots.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return SnapshotList
     */
    public function listSnapshots($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new SnapshotList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified persistent disk snapshot resource. (snapshots.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to delete.
     * @return Operation
     */
    public function delete($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "zones" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $zones = $computeService->zones;
   *  </code>
   */
  class ZonesServiceResource extends apiServiceResource {


    /**
     * Retrieves the list of zone resources available to the specified project. (zones.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return ZoneList
     */
    public function listZones($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ZoneList($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified zone resource. (zones.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone resource to return.
     * @return Zone
     */
    public function get($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Zone($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "instances" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $instances = $computeService->instances;
   *  </code>
   */
  class InstancesServiceResource extends apiServiceResource {


    /**
     * Creates an instance resource in the specified project using the data included in the request.
     * (instances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Instance $postBody
     * @return Operation
     */
    public function insert($project, Instance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an access config from an instance's network interface. (instances.deleteAccessConfig)
     *
     * @param string $project Project name.
     * @param string $instance Instance name.
     * @param string $access_config Access config name.
     * @param string $network_interface Network interface name.
     * @return Operation
     */
    public function deleteAccessConfig($project, $instance, $access_config, $network_interface, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'access_config' => $access_config, 'network_interface' => $network_interface);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deleteAccessConfig', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified instance resource. (instances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $instance Name of the instance resource to return.
     * @return Instance
     */
    public function get($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Instance($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of instance resources contained within the specified project. (instances.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return InstanceList
     */
    public function listInstances($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new InstanceList($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds an access config to an instance's network interface. (instances.addAccessConfig)
     *
     * @param string $project Project name.
     * @param string $instance Instance name.
     * @param string $network_interface Network interface name.
     * @param AccessConfig $postBody
     * @return Operation
     */
    public function addAccessConfig($project, $instance, $network_interface, AccessConfig $postBody, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'network_interface' => $network_interface, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addAccessConfig', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified instance resource. (instances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $instance Name of the instance resource to delete.
     * @return Operation
     */
    public function delete($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "machineTypes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $machineTypes = $computeService->machineTypes;
   *  </code>
   */
  class MachineTypesServiceResource extends apiServiceResource {


    /**
     * Retrieves the list of machine type resources available to the specified project.
     * (machineTypes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return MachineTypeList
     */
    public function listMachineTypes($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new MachineTypeList($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified machine type resource. (machineTypes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $machineType Name of the machine type resource to return.
     * @return MachineType
     */
    public function get($project, $machineType, $optParams = array()) {
      $params = array('project' => $project, 'machineType' => $machineType);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new MachineType($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "images" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $images = $computeService->images;
   *  </code>
   */
  class ImagesServiceResource extends apiServiceResource {


    /**
     * Creates an image resource in the specified project using the data included in the request.
     * (images.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Image $postBody
     * @return Operation
     */
    public function insert($project, Image $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified image resource. (images.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to return.
     * @return Image
     */
    public function get($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Image($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of image resources available to the specified project. (images.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return ImageList
     */
    public function listImages($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ImageList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified image resource. (images.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to delete.
     * @return Operation
     */
    public function delete($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "firewalls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $firewalls = $computeService->firewalls;
   *  </code>
   */
  class FirewallsServiceResource extends apiServiceResource {


    /**
     * Creates a firewall resource in the specified project using the data included in the request.
     * (firewalls.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Firewall $postBody
     * @return Operation
     */
    public function insert($project, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified firewall resource. (firewalls.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to return.
     * @return Firewall
     */
    public function get($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Firewall($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of firewall resources available to the specified project. (firewalls.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return FirewallList
     */
    public function listFirewalls($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new FirewallList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the request. (firewalls.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Firewall $postBody
     * @return Operation
     */
    public function update($project, $firewall, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the request. This method
     * supports patch semantics. (firewalls.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Firewall $postBody
     * @return Operation
     */
    public function patch($project, $firewall, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified firewall resource. (firewalls.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to delete.
     * @return Operation
     */
    public function delete($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "networks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $networks = $computeService->networks;
   *  </code>
   */
  class NetworksServiceResource extends apiServiceResource {


    /**
     * Creates a network resource in the specified project using the data included in the request.
     * (networks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Network $postBody
     * @return Operation
     */
    public function insert($project, Network $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified network resource. (networks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to return.
     * @return Network
     */
    public function get($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Network($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of network resources available to the specified project. (networks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @return NetworkList
     */
    public function listNetworks($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new NetworkList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified network resource. (networks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to delete.
     * @return Operation
     */
    public function delete($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "projects" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new apiComputeService(...);
   *   $projects = $computeService->projects;
   *  </code>
   */
  class ProjectsServiceResource extends apiServiceResource {


    /**
     * Sets metadata common to all instances within the specified project using the data included in the
     * request. (projects.setCommonInstanceMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param Metadata $postBody
     */
    public function setCommonInstanceMetadata($project, Metadata $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setCommonInstanceMetadata', array($params));
      return $data;
    }
    /**
     * Returns the specified project resource. (projects.get)
     *
     * @param string $project Name of the project resource to retrieve.
     * @return Project
     */
    public function get($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Project($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Compute (v1beta12).
 *
 * <p>
 * API for the Google Compute Engine service.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/compute/docs/reference/v1beta12" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiComputeService extends apiService {
  public $operations;
  public $kernels;
  public $disks;
  public $snapshots;
  public $zones;
  public $instances;
  public $machineTypes;
  public $images;
  public $firewalls;
  public $networks;
  public $projects;
  /**
   * Constructs the internal representation of the Compute service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->restBasePath = '/compute/v1beta12/projects/';
    $this->version = 'v1beta12';
    $this->serviceName = 'compute';

    $apiClient->addService($this->serviceName, $this->version);
    $this->operations = new OperationsServiceResource($this, $this->serviceName, 'operations', json_decode('{"methods": {"delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "operation": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "{project}/operations/{operation}", "id": "compute.operations.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.operations.list", "httpMethod": "GET", "path": "{project}/operations", "response": {"$ref": "OperationList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "operation": {"required": true, "type": "string", "location": "path"}}, "id": "compute.operations.get", "httpMethod": "GET", "path": "{project}/operations/{operation}", "response": {"$ref": "Operation"}}}}', true));
    $this->kernels = new KernelsServiceResource($this, $this->serviceName, 'kernels', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.kernels.list", "httpMethod": "GET", "path": "{project}/kernels", "response": {"$ref": "KernelList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "kernel": {"required": true, "type": "string", "location": "path"}}, "id": "compute.kernels.get", "httpMethod": "GET", "path": "{project}/kernels/{kernel}", "response": {"$ref": "Kernel"}}}}', true));
    $this->disks = new DisksServiceResource($this, $this->serviceName, 'disks', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Disk"}, "id": "compute.disks.insert", "httpMethod": "POST", "path": "{project}/disks", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "disk": {"required": true, "type": "string", "location": "path"}}, "id": "compute.disks.delete", "httpMethod": "DELETE", "path": "{project}/disks/{disk}", "response": {"$ref": "Operation"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.disks.list", "httpMethod": "GET", "path": "{project}/disks", "response": {"$ref": "DiskList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "disk": {"required": true, "type": "string", "location": "path"}}, "id": "compute.disks.get", "httpMethod": "GET", "path": "{project}/disks/{disk}", "response": {"$ref": "Disk"}}}}', true));
    $this->snapshots = new SnapshotsServiceResource($this, $this->serviceName, 'snapshots', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Snapshot"}, "id": "compute.snapshots.insert", "httpMethod": "POST", "path": "{project}/snapshots", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "snapshot": {"required": true, "type": "string", "location": "path"}}, "id": "compute.snapshots.delete", "httpMethod": "DELETE", "path": "{project}/snapshots/{snapshot}", "response": {"$ref": "Operation"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.snapshots.list", "httpMethod": "GET", "path": "{project}/snapshots", "response": {"$ref": "SnapshotList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "snapshot": {"required": true, "type": "string", "location": "path"}}, "id": "compute.snapshots.get", "httpMethod": "GET", "path": "{project}/snapshots/{snapshot}", "response": {"$ref": "Snapshot"}}}}', true));
    $this->zones = new ZonesServiceResource($this, $this->serviceName, 'zones', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.zones.list", "httpMethod": "GET", "path": "{project}/zones", "response": {"$ref": "ZoneList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "zone": {"required": true, "type": "string", "location": "path"}}, "id": "compute.zones.get", "httpMethod": "GET", "path": "{project}/zones/{zone}", "response": {"$ref": "Zone"}}}}', true));
    $this->instances = new InstancesServiceResource($this, $this->serviceName, 'instances', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Instance"}, "id": "compute.instances.insert", "httpMethod": "POST", "path": "{project}/instances", "response": {"$ref": "Operation"}}, "deleteAccessConfig": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "instance": {"required": true, "type": "string", "location": "path"}, "access_config": {"required": true, "type": "string", "location": "query"}, "network_interface": {"required": true, "type": "string", "location": "query"}}, "id": "compute.instances.deleteAccessConfig", "httpMethod": "POST", "path": "{project}/instances/{instance}/delete-access-config", "response": {"$ref": "Operation"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "instance": {"required": true, "type": "string", "location": "path"}}, "id": "compute.instances.get", "httpMethod": "GET", "path": "{project}/instances/{instance}", "response": {"$ref": "Instance"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.instances.list", "httpMethod": "GET", "path": "{project}/instances", "response": {"$ref": "InstanceList"}}, "addAccessConfig": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "instance": {"required": true, "type": "string", "location": "path"}, "network_interface": {"required": true, "type": "string", "location": "query"}}, "request": {"$ref": "AccessConfig"}, "id": "compute.instances.addAccessConfig", "httpMethod": "POST", "path": "{project}/instances/{instance}/add-access-config", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "instance": {"required": true, "type": "string", "location": "path"}}, "id": "compute.instances.delete", "httpMethod": "DELETE", "path": "{project}/instances/{instance}", "response": {"$ref": "Operation"}}}}', true));
    $this->machineTypes = new MachineTypesServiceResource($this, $this->serviceName, 'machineTypes', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.machineTypes.list", "httpMethod": "GET", "path": "{project}/machine-types", "response": {"$ref": "MachineTypeList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "machineType": {"required": true, "type": "string", "location": "path"}}, "id": "compute.machineTypes.get", "httpMethod": "GET", "path": "{project}/machine-types/{machineType}", "response": {"$ref": "MachineType"}}}}', true));
    $this->images = new ImagesServiceResource($this, $this->serviceName, 'images', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/devstorage.read_only"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Image"}, "id": "compute.images.insert", "httpMethod": "POST", "path": "{project}/images", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "image": {"required": true, "type": "string", "location": "path"}}, "id": "compute.images.delete", "httpMethod": "DELETE", "path": "{project}/images/{image}", "response": {"$ref": "Operation"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.images.list", "httpMethod": "GET", "path": "{project}/images", "response": {"$ref": "ImageList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "image": {"required": true, "type": "string", "location": "path"}}, "id": "compute.images.get", "httpMethod": "GET", "path": "{project}/images/{image}", "response": {"$ref": "Image"}}}}', true));
    $this->firewalls = new FirewallsServiceResource($this, $this->serviceName, 'firewalls', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Firewall"}, "id": "compute.firewalls.insert", "httpMethod": "POST", "path": "{project}/firewalls", "response": {"$ref": "Operation"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"firewall": {"required": true, "type": "string", "location": "path"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.firewalls.get", "httpMethod": "GET", "path": "{project}/firewalls/{firewall}", "response": {"$ref": "Firewall"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.firewalls.list", "httpMethod": "GET", "path": "{project}/firewalls", "response": {"$ref": "FirewallList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"firewall": {"required": true, "type": "string", "location": "path"}, "project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Firewall"}, "id": "compute.firewalls.update", "httpMethod": "PUT", "path": "{project}/firewalls/{firewall}", "response": {"$ref": "Operation"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"firewall": {"required": true, "type": "string", "location": "path"}, "project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Firewall"}, "id": "compute.firewalls.patch", "httpMethod": "PATCH", "path": "{project}/firewalls/{firewall}", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"firewall": {"required": true, "type": "string", "location": "path"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.firewalls.delete", "httpMethod": "DELETE", "path": "{project}/firewalls/{firewall}", "response": {"$ref": "Operation"}}}}', true));
    $this->networks = new NetworksServiceResource($this, $this->serviceName, 'networks', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Network"}, "id": "compute.networks.insert", "httpMethod": "POST", "path": "{project}/networks", "response": {"$ref": "Operation"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "network": {"required": true, "type": "string", "location": "path"}}, "id": "compute.networks.delete", "httpMethod": "DELETE", "path": "{project}/networks/{network}", "response": {"$ref": "Operation"}}, "list": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"filter": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "type": "integer", "location": "query"}, "project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.networks.list", "httpMethod": "GET", "path": "{project}/networks", "response": {"$ref": "NetworkList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}, "network": {"required": true, "type": "string", "location": "path"}}, "id": "compute.networks.get", "httpMethod": "GET", "path": "{project}/networks/{network}", "response": {"$ref": "Network"}}}}', true));
    $this->projects = new ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"setCommonInstanceMetadata": {"scopes": ["https://www.googleapis.com/auth/compute"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Metadata"}, "httpMethod": "POST", "path": "{project}/set-common-instance-metadata", "id": "compute.projects.setCommonInstanceMetadata"}, "get": {"scopes": ["https://www.googleapis.com/auth/compute.readonly"], "parameters": {"project": {"required": true, "type": "string", "location": "path"}}, "id": "compute.projects.get", "httpMethod": "GET", "path": "{project}", "response": {"$ref": "Project"}}}}', true));

  }
}

class AccessConfig extends apiModel {
  public $kind;
  public $type;
  public $name;
  public $natIP;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNatIP($natIP) {
    $this->natIP = $natIP;
  }
  public function getNatIP() {
    return $this->natIP;
  }
}

class AttachedDisk extends apiModel {
  public $deviceName;
  public $kind;
  public $index;
  public $source;
  public $mode;
  public $deleteOnTerminate;
  public $type;
  public function setDeviceName($deviceName) {
    $this->deviceName = $deviceName;
  }
  public function getDeviceName() {
    return $this->deviceName;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setIndex($index) {
    $this->index = $index;
  }
  public function getIndex() {
    return $this->index;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setMode($mode) {
    $this->mode = $mode;
  }
  public function getMode() {
    return $this->mode;
  }
  public function setDeleteOnTerminate($deleteOnTerminate) {
    $this->deleteOnTerminate = $deleteOnTerminate;
  }
  public function getDeleteOnTerminate() {
    return $this->deleteOnTerminate;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class Disk extends apiModel {
  public $status;
  public $sourceSnapshot;
  public $kind;
  public $description;
  public $sizeGb;
  public $id;
  public $sourceSnapshotId;
  public $zone;
  public $creationTimestamp;
  public $options;
  public $selfLink;
  public $name;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setSourceSnapshot($sourceSnapshot) {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  public function getSourceSnapshot() {
    return $this->sourceSnapshot;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSizeGb($sizeGb) {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb() {
    return $this->sizeGb;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setSourceSnapshotId($sourceSnapshotId) {
    $this->sourceSnapshotId = $sourceSnapshotId;
  }
  public function getSourceSnapshotId() {
    return $this->sourceSnapshotId;
  }
  public function setZone($zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setOptions($options) {
    $this->options = $options;
  }
  public function getOptions() {
    return $this->options;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class DiskList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Disk';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Disk) */ $items) {
    $this->assertIsArray($items, 'Disk', __METHOD__);
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

class Firewall extends apiModel {
  public $kind;
  public $description;
  public $sourceTags;
  public $sourceRanges;
  public $network;
  public $targetTags;
  protected $__allowedType = 'FirewallAllowed';
  protected $__allowedDataType = 'array';
  public $allowed;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSourceTags(/* array(string) */ $sourceTags) {
    $this->assertIsArray($sourceTags, 'string', __METHOD__);
    $this->sourceTags = $sourceTags;
  }
  public function getSourceTags() {
    return $this->sourceTags;
  }
  public function setSourceRanges(/* array(string) */ $sourceRanges) {
    $this->assertIsArray($sourceRanges, 'string', __METHOD__);
    $this->sourceRanges = $sourceRanges;
  }
  public function getSourceRanges() {
    return $this->sourceRanges;
  }
  public function setNetwork($network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setTargetTags(/* array(string) */ $targetTags) {
    $this->assertIsArray($targetTags, 'string', __METHOD__);
    $this->targetTags = $targetTags;
  }
  public function getTargetTags() {
    return $this->targetTags;
  }
  public function setAllowed(/* array(FirewallAllowed) */ $allowed) {
    $this->assertIsArray($allowed, 'FirewallAllowed', __METHOD__);
    $this->allowed = $allowed;
  }
  public function getAllowed() {
    return $this->allowed;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class FirewallAllowed extends apiModel {
  public $IPProtocol;
  public $ports;
  public function setIPProtocol($IPProtocol) {
    $this->IPProtocol = $IPProtocol;
  }
  public function getIPProtocol() {
    return $this->IPProtocol;
  }
  public function setPorts(/* array(string) */ $ports) {
    $this->assertIsArray($ports, 'string', __METHOD__);
    $this->ports = $ports;
  }
  public function getPorts() {
    return $this->ports;
  }
}

class FirewallList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Firewall';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Firewall) */ $items) {
    $this->assertIsArray($items, 'Firewall', __METHOD__);
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

class Image extends apiModel {
  public $kind;
  public $description;
  protected $__rawDiskType = 'ImageRawDisk';
  protected $__rawDiskDataType = '';
  public $rawDisk;
  public $preferredKernel;
  protected $__diskSnapshotType = 'ImageDiskSnapshot';
  protected $__diskSnapshotDataType = '';
  public $diskSnapshot;
  public $sourceType;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setRawDisk(ImageRawDisk $rawDisk) {
    $this->rawDisk = $rawDisk;
  }
  public function getRawDisk() {
    return $this->rawDisk;
  }
  public function setPreferredKernel($preferredKernel) {
    $this->preferredKernel = $preferredKernel;
  }
  public function getPreferredKernel() {
    return $this->preferredKernel;
  }
  public function setDiskSnapshot(ImageDiskSnapshot $diskSnapshot) {
    $this->diskSnapshot = $diskSnapshot;
  }
  public function getDiskSnapshot() {
    return $this->diskSnapshot;
  }
  public function setSourceType($sourceType) {
    $this->sourceType = $sourceType;
  }
  public function getSourceType() {
    return $this->sourceType;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class ImageDiskSnapshot extends apiModel {
  public $source;
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
}

class ImageList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Image';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Image) */ $items) {
    $this->assertIsArray($items, 'Image', __METHOD__);
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

class ImageRawDisk extends apiModel {
  public $containerType;
  public $source;
  public $sha1Checksum;
  public function setContainerType($containerType) {
    $this->containerType = $containerType;
  }
  public function getContainerType() {
    return $this->containerType;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setSha1Checksum($sha1Checksum) {
    $this->sha1Checksum = $sha1Checksum;
  }
  public function getSha1Checksum() {
    return $this->sha1Checksum;
  }
}

class Instance extends apiModel {
  public $status;
  public $kind;
  public $machineType;
  public $description;
  public $zone;
  public $tags;
  public $image;
  protected $__disksType = 'AttachedDisk';
  protected $__disksDataType = 'array';
  public $disks;
  public $name;
  public $statusMessage;
  protected $__serviceAccountsType = 'ServiceAccount';
  protected $__serviceAccountsDataType = 'array';
  public $serviceAccounts;
  protected $__networkInterfacesType = 'NetworkInterface';
  protected $__networkInterfacesDataType = 'array';
  public $networkInterfaces;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  protected $__metadataType = 'Metadata';
  protected $__metadataDataType = '';
  public $metadata;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMachineType($machineType) {
    $this->machineType = $machineType;
  }
  public function getMachineType() {
    return $this->machineType;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setZone($zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
  public function setTags(/* array(string) */ $tags) {
    $this->assertIsArray($tags, 'string', __METHOD__);
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setImage($image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setDisks(/* array(AttachedDisk) */ $disks) {
    $this->assertIsArray($disks, 'AttachedDisk', __METHOD__);
    $this->disks = $disks;
  }
  public function getDisks() {
    return $this->disks;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setStatusMessage($statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setServiceAccounts(/* array(ServiceAccount) */ $serviceAccounts) {
    $this->assertIsArray($serviceAccounts, 'ServiceAccount', __METHOD__);
    $this->serviceAccounts = $serviceAccounts;
  }
  public function getServiceAccounts() {
    return $this->serviceAccounts;
  }
  public function setNetworkInterfaces(/* array(NetworkInterface) */ $networkInterfaces) {
    $this->assertIsArray($networkInterfaces, 'NetworkInterface', __METHOD__);
    $this->networkInterfaces = $networkInterfaces;
  }
  public function getNetworkInterfaces() {
    return $this->networkInterfaces;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setMetadata(Metadata $metadata) {
    $this->metadata = $metadata;
  }
  public function getMetadata() {
    return $this->metadata;
  }
}

class InstanceList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Instance';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Instance) */ $items) {
    $this->assertIsArray($items, 'Instance', __METHOD__);
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

class Kernel extends apiModel {
  public $kind;
  public $description;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class KernelList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Kernel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Kernel) */ $items) {
    $this->assertIsArray($items, 'Kernel', __METHOD__);
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

class MachineType extends apiModel {
  public $guestCpus;
  public $imageSpaceGb;
  public $kind;
  protected $__ephemeralDisksType = 'MachineTypeEphemeralDisks';
  protected $__ephemeralDisksDataType = 'array';
  public $ephemeralDisks;
  public $maximumPersistentDisksSizeGb;
  public $description;
  public $maximumPersistentDisks;
  public $name;
  public $memoryMb;
  public $availableZone;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $hostCpus;
  public function setGuestCpus($guestCpus) {
    $this->guestCpus = $guestCpus;
  }
  public function getGuestCpus() {
    return $this->guestCpus;
  }
  public function setImageSpaceGb($imageSpaceGb) {
    $this->imageSpaceGb = $imageSpaceGb;
  }
  public function getImageSpaceGb() {
    return $this->imageSpaceGb;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setEphemeralDisks(/* array(MachineTypeEphemeralDisks) */ $ephemeralDisks) {
    $this->assertIsArray($ephemeralDisks, 'MachineTypeEphemeralDisks', __METHOD__);
    $this->ephemeralDisks = $ephemeralDisks;
  }
  public function getEphemeralDisks() {
    return $this->ephemeralDisks;
  }
  public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb) {
    $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
  }
  public function getMaximumPersistentDisksSizeGb() {
    return $this->maximumPersistentDisksSizeGb;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setMaximumPersistentDisks($maximumPersistentDisks) {
    $this->maximumPersistentDisks = $maximumPersistentDisks;
  }
  public function getMaximumPersistentDisks() {
    return $this->maximumPersistentDisks;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setMemoryMb($memoryMb) {
    $this->memoryMb = $memoryMb;
  }
  public function getMemoryMb() {
    return $this->memoryMb;
  }
  public function setAvailableZone(/* array(object) */ $availableZone) {
    $this->assertIsArray($availableZone, 'object', __METHOD__);
    $this->availableZone = $availableZone;
  }
  public function getAvailableZone() {
    return $this->availableZone;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setHostCpus($hostCpus) {
    $this->hostCpus = $hostCpus;
  }
  public function getHostCpus() {
    return $this->hostCpus;
  }
}

class MachineTypeEphemeralDisks extends apiModel {
  public $diskGb;
  public function setDiskGb($diskGb) {
    $this->diskGb = $diskGb;
  }
  public function getDiskGb() {
    return $this->diskGb;
  }
}

class MachineTypeList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'MachineType';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(MachineType) */ $items) {
    $this->assertIsArray($items, 'MachineType', __METHOD__);
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

class Metadata extends apiModel {
  protected $__itemsType = 'MetadataItems';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(MetadataItems) */ $items) {
    $this->assertIsArray($items, 'MetadataItems', __METHOD__);
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

class MetadataItems extends apiModel {
  public $value;
  public $key;
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
  public function setKey($key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
}

class Network extends apiModel {
  public $kind;
  public $description;
  public $IPv4Range;
  public $gatewayIPv4;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setIPv4Range($IPv4Range) {
    $this->IPv4Range = $IPv4Range;
  }
  public function getIPv4Range() {
    return $this->IPv4Range;
  }
  public function setGatewayIPv4($gatewayIPv4) {
    $this->gatewayIPv4 = $gatewayIPv4;
  }
  public function getGatewayIPv4() {
    return $this->gatewayIPv4;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class NetworkInterface extends apiModel {
  public $network;
  protected $__accessConfigsType = 'AccessConfig';
  protected $__accessConfigsDataType = 'array';
  public $accessConfigs;
  public $networkIP;
  public $kind;
  public $name;
  public function setNetwork($network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setAccessConfigs(/* array(AccessConfig) */ $accessConfigs) {
    $this->assertIsArray($accessConfigs, 'AccessConfig', __METHOD__);
    $this->accessConfigs = $accessConfigs;
  }
  public function getAccessConfigs() {
    return $this->accessConfigs;
  }
  public function setNetworkIP($networkIP) {
    $this->networkIP = $networkIP;
  }
  public function getNetworkIP() {
    return $this->networkIP;
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
}

class NetworkList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Network';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Network) */ $items) {
    $this->assertIsArray($items, 'Network', __METHOD__);
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

class Operation extends apiModel {
  public $status;
  public $kind;
  public $name;
  public $startTime;
  public $httpErrorStatusCode;
  public $user;
  protected $__errorType = 'OperationError';
  protected $__errorDataType = '';
  public $error;
  public $targetId;
  public $operationType;
  public $statusMessage;
  public $insertTime;
  public $httpErrorMessage;
  public $progress;
  public $clientOperationId;
  public $endTime;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $targetLink;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
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
  public function setStartTime($startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
  public function setHttpErrorStatusCode($httpErrorStatusCode) {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }
  public function getHttpErrorStatusCode() {
    return $this->httpErrorStatusCode;
  }
  public function setUser($user) {
    $this->user = $user;
  }
  public function getUser() {
    return $this->user;
  }
  public function setError(OperationError $error) {
    $this->error = $error;
  }
  public function getError() {
    return $this->error;
  }
  public function setTargetId($targetId) {
    $this->targetId = $targetId;
  }
  public function getTargetId() {
    return $this->targetId;
  }
  public function setOperationType($operationType) {
    $this->operationType = $operationType;
  }
  public function getOperationType() {
    return $this->operationType;
  }
  public function setStatusMessage($statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setInsertTime($insertTime) {
    $this->insertTime = $insertTime;
  }
  public function getInsertTime() {
    return $this->insertTime;
  }
  public function setHttpErrorMessage($httpErrorMessage) {
    $this->httpErrorMessage = $httpErrorMessage;
  }
  public function getHttpErrorMessage() {
    return $this->httpErrorMessage;
  }
  public function setProgress($progress) {
    $this->progress = $progress;
  }
  public function getProgress() {
    return $this->progress;
  }
  public function setClientOperationId($clientOperationId) {
    $this->clientOperationId = $clientOperationId;
  }
  public function getClientOperationId() {
    return $this->clientOperationId;
  }
  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setTargetLink($targetLink) {
    $this->targetLink = $targetLink;
  }
  public function getTargetLink() {
    return $this->targetLink;
  }
}

class OperationError extends apiModel {
  protected $__errorsType = 'OperationErrorErrors';
  protected $__errorsDataType = 'array';
  public $errors;
  public function setErrors(/* array(OperationErrorErrors) */ $errors) {
    $this->assertIsArray($errors, 'OperationErrorErrors', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
}

class OperationErrorErrors extends apiModel {
  public $message;
  public $code;
  public $location;
  public function setMessage($message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
}

class OperationList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Operation';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Operation) */ $items) {
    $this->assertIsArray($items, 'Operation', __METHOD__);
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

class Project extends apiModel {
  public $kind;
  public $description;
  protected $__commonInstanceMetadataType = 'Metadata';
  protected $__commonInstanceMetadataDataType = '';
  public $commonInstanceMetadata;
  public $externalIpAddresses;
  protected $__quotasType = 'ProjectQuotas';
  protected $__quotasDataType = 'array';
  public $quotas;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setCommonInstanceMetadata(Metadata $commonInstanceMetadata) {
    $this->commonInstanceMetadata = $commonInstanceMetadata;
  }
  public function getCommonInstanceMetadata() {
    return $this->commonInstanceMetadata;
  }
  public function setExternalIpAddresses(/* array(string) */ $externalIpAddresses) {
    $this->assertIsArray($externalIpAddresses, 'string', __METHOD__);
    $this->externalIpAddresses = $externalIpAddresses;
  }
  public function getExternalIpAddresses() {
    return $this->externalIpAddresses;
  }
  public function setQuotas(/* array(ProjectQuotas) */ $quotas) {
    $this->assertIsArray($quotas, 'ProjectQuotas', __METHOD__);
    $this->quotas = $quotas;
  }
  public function getQuotas() {
    return $this->quotas;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class ProjectQuotas extends apiModel {
  public $usage;
  public $metric;
  public $limit;
  public function setUsage($usage) {
    $this->usage = $usage;
  }
  public function getUsage() {
    return $this->usage;
  }
  public function setMetric($metric) {
    $this->metric = $metric;
  }
  public function getMetric() {
    return $this->metric;
  }
  public function setLimit($limit) {
    $this->limit = $limit;
  }
  public function getLimit() {
    return $this->limit;
  }
}

class ServiceAccount extends apiModel {
  public $scopes;
  public $kind;
  public $email;
  public function setScopes(/* array(string) */ $scopes) {
    $this->assertIsArray($scopes, 'string', __METHOD__);
    $this->scopes = $scopes;
  }
  public function getScopes() {
    return $this->scopes;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
}

class Snapshot extends apiModel {
  public $status;
  public $kind;
  public $description;
  public $sourceDisk;
  public $sourceDiskId;
  public $diskSizeGb;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSourceDisk($sourceDisk) {
    $this->sourceDisk = $sourceDisk;
  }
  public function getSourceDisk() {
    return $this->sourceDisk;
  }
  public function setSourceDiskId($sourceDiskId) {
    $this->sourceDiskId = $sourceDiskId;
  }
  public function getSourceDiskId() {
    return $this->sourceDiskId;
  }
  public function setDiskSizeGb($diskSizeGb) {
    $this->diskSizeGb = $diskSizeGb;
  }
  public function getDiskSizeGb() {
    return $this->diskSizeGb;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class SnapshotList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Snapshot';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Snapshot) */ $items) {
    $this->assertIsArray($items, 'Snapshot', __METHOD__);
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

class Zone extends apiModel {
  public $status;
  public $kind;
  public $availableMachineType;
  public $description;
  protected $__maintenanceWindowsType = 'ZoneMaintenanceWindows';
  protected $__maintenanceWindowsDataType = 'array';
  public $maintenanceWindows;
  public $creationTimestamp;
  public $id;
  public $selfLink;
  public $name;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAvailableMachineType(/* array(object) */ $availableMachineType) {
    $this->assertIsArray($availableMachineType, 'object', __METHOD__);
    $this->availableMachineType = $availableMachineType;
  }
  public function getAvailableMachineType() {
    return $this->availableMachineType;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setMaintenanceWindows(/* array(ZoneMaintenanceWindows) */ $maintenanceWindows) {
    $this->assertIsArray($maintenanceWindows, 'ZoneMaintenanceWindows', __METHOD__);
    $this->maintenanceWindows = $maintenanceWindows;
  }
  public function getMaintenanceWindows() {
    return $this->maintenanceWindows;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class ZoneList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Zone';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $id;
  public $selfLink;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Zone) */ $items) {
    $this->assertIsArray($items, 'Zone', __METHOD__);
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

class ZoneMaintenanceWindows extends apiModel {
  public $endTime;
  public $beginTime;
  public $name;
  public $description;
  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setBeginTime($beginTime) {
    $this->beginTime = $beginTime;
  }
  public function getBeginTime() {
    return $this->beginTime;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
}
