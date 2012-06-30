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
   * The "channels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new apiYoutubeService(...);
   *   $channels = $youtubeService->channels;
   *  </code>
   */
  class ChannelsServiceResource extends apiServiceResource {


    /**
     * Browse the YouTube channel collection. (channels.list)
     *
     * @param string $part Parts of the channel resource to be returned.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string mine Flag indicating only return the channel ids of the authenticated user.
     * @return ChannelListResponse
     */
    public function listChannels($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ChannelListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "search" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new apiYoutubeService(...);
   *   $search = $youtubeService->search;
   *  </code>
   */
  class SearchServiceResource extends apiServiceResource {


    /**
     * Universal search for youtube. (search.list)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string q Query to search in Youtube.
     * @opt_param string startIndex Index of the first search result to return.
     * @opt_param string type Type of resource to search.
     * @opt_param string order Sort order.
     * @opt_param string maxResults Maximum number of search results to return per page.
     * @return SearchListResponse
     */
    public function listSearch($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new SearchListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "playlistitems" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new apiYoutubeService(...);
   *   $playlistitems = $youtubeService->playlistitems;
   *  </code>
   */
  class PlaylistitemsServiceResource extends apiServiceResource {


    /**
     * Browse the YouTube playlist collection. (playlistitems.list)
     *
     * @param string $part Parts of the playlist resource to be returned.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     * @opt_param string playlistId Retrieves playlist items from the given playlist id.
     * @opt_param string id YouTube IDs of the playlists to be returned.
     * @opt_param string maxResults Maximum number of results to return
     * @return PlaylistItemListResponse
     */
    public function listPlaylistitems($part, $optParams = array()) {
      $params = array('part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new PlaylistItemListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "playlists" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new apiYoutubeService(...);
   *   $playlists = $youtubeService->playlists;
   *  </code>
   */
  class PlaylistsServiceResource extends apiServiceResource {


    /**
     * Browse the YouTube playlist collection. (playlists.list)
     *
     * @param string $id YouTube IDs of the playlists to be returned.
     * @param string $part Parts of the playlist resource to be returned.
     * @return PlaylistListResponse
     */
    public function listPlaylists($id, $part, $optParams = array()) {
      $params = array('id' => $id, 'part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new PlaylistListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "videos" collection of methods.
   * Typical usage is:
   *  <code>
   *   $youtubeService = new apiYoutubeService(...);
   *   $videos = $youtubeService->videos;
   *  </code>
   */
  class VideosServiceResource extends apiServiceResource {


    /**
     * Browse the YouTube video collection. (videos.list)
     *
     * @param string $id YouTube IDs of the videos to be returned.
     * @param string $part Parts of the video resource to be returned.
     * @return VideoListResponse
     */
    public function listVideos($id, $part, $optParams = array()) {
      $params = array('id' => $id, 'part' => $part);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new VideoListResponse($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Youtube (v3alpha).
 *
 * <p>
 * Programmatic access to YouTube features.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/youtube" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiYoutubeService extends apiService {
  public $channels;
  public $search;
  public $playlistitems;
  public $playlists;
  public $videos;
  /**
   * Constructs the internal representation of the Youtube service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->restBasePath = '/youtube/v3alpha/';
    $this->version = 'v3alpha';
    $this->serviceName = 'youtube';

    $apiClient->addService($this->serviceName, $this->version);
    $this->channels = new ChannelsServiceResource($this, $this->serviceName, 'channels', json_decode('{"methods": {"list": {"parameters": {"part": {"required": true, "type": "string", "location": "query"}, "mine": {"type": "string", "location": "query"}}, "id": "youtube.channels.list", "httpMethod": "GET", "path": "channels", "response": {"$ref": "ChannelListResponse"}}}}', true));
    $this->search = new SearchServiceResource($this, $this->serviceName, 'search', json_decode('{"methods": {"list": {"parameters": {"q": {"type": "string", "location": "query"}, "startIndex": {"format": "uint32", "default": "0", "maximum": "1000", "minimum": "0", "location": "query", "type": "integer"}, "type": {"enum": ["channel", "playlist", "video"], "repeated": true, "location": "query", "type": "string"}, "order": {"default": "SEARCH_SORT_RELEVANCE", "enum": ["date", "rating", "relevance", "view_count"], "location": "query", "type": "string"}, "maxResults": {"format": "uint32", "default": "25", "maximum": "50", "minimum": "0", "location": "query", "type": "integer"}}, "id": "youtube.search.list", "httpMethod": "GET", "path": "search", "response": {"$ref": "SearchListResponse"}}}}', true));
    $this->playlistitems = new PlaylistitemsServiceResource($this, $this->serviceName, 'playlistitems', json_decode('{"methods": {"list": {"parameters": {"startIndex": {"format": "uint32", "minimum": "0", "type": "integer", "location": "query"}, "part": {"required": true, "type": "string", "location": "query"}, "playlistId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "50", "minimum": "0", "location": "query", "type": "integer"}}, "id": "youtube.playlistitems.list", "httpMethod": "GET", "path": "playlistitems", "response": {"$ref": "PlaylistItemListResponse"}}}}', true));
    $this->playlists = new PlaylistsServiceResource($this, $this->serviceName, 'playlists', json_decode('{"methods": {"list": {"parameters": {"part": {"required": true, "type": "string", "location": "query"}, "id": {"required": true, "type": "string", "location": "query"}}, "id": "youtube.playlists.list", "httpMethod": "GET", "path": "playlists", "response": {"$ref": "PlaylistListResponse"}}}}', true));
    $this->videos = new VideosServiceResource($this, $this->serviceName, 'videos', json_decode('{"methods": {"list": {"parameters": {"part": {"required": true, "type": "string", "location": "query"}, "id": {"required": true, "type": "string", "location": "query"}}, "id": "youtube.videos.list", "httpMethod": "GET", "path": "videos", "response": {"$ref": "VideoListResponse"}}}}', true));

  }
}

class Channel extends apiModel {
  protected $__contentDetailsType = 'ChannelContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  public $kind;
  public $etag;
  public $id;
  public function setContentDetails(ChannelContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
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
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class ChannelContentDetails extends apiModel {
  public $uploads;
  public function setUploads($uploads) {
    $this->uploads = $uploads;
  }
  public function getUploads() {
    return $this->uploads;
  }
}

class ChannelListResponse extends apiModel {
  protected $__channelsType = 'Channel';
  protected $__channelsDataType = 'array';
  public $channels;
  public $kind;
  public $etag;
  public function setChannels(/* array(Channel) */ $channels) {
    $this->assertIsArray($channels, 'Channel', __METHOD__);
    $this->channels = $channels;
  }
  public function getChannels() {
    return $this->channels;
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
}

class PageInfo extends apiModel {
  public $totalResults;
  public $startIndex;
  public $resultPerPage;
  public function setTotalResults($totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setStartIndex($startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setResultPerPage($resultPerPage) {
    $this->resultPerPage = $resultPerPage;
  }
  public function getResultPerPage() {
    return $this->resultPerPage;
  }
}

class Playlist extends apiModel {
  protected $__snippetType = 'PlaylistSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public $kind;
  public $etag;
  public $id;
  public function setSnippet(PlaylistSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
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
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class PlaylistItem extends apiModel {
  protected $__snippetType = 'PlaylistItemSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public $kind;
  public $etag;
  public $id;
  public function setSnippet(PlaylistItemSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
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
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class PlaylistItemListResponse extends apiModel {
  protected $__playlistItemsType = 'PlaylistItem';
  protected $__playlistItemsDataType = 'array';
  public $playlistItems;
  public $kind;
  public $etag;
  public function setPlaylistItems(/* array(PlaylistItem) */ $playlistItems) {
    $this->assertIsArray($playlistItems, 'PlaylistItem', __METHOD__);
    $this->playlistItems = $playlistItems;
  }
  public function getPlaylistItems() {
    return $this->playlistItems;
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
}

class PlaylistItemSnippet extends apiModel {
  public $description;
  public $author;
  protected $__resourceIdType = 'ResourceId';
  protected $__resourceIdDataType = '';
  public $resourceId;
  public $timePublished;
  public $playlistId;
  public $title;
  public $timeUpdated;
  public $position;
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setResourceId(ResourceId $resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setTimePublished($timePublished) {
    $this->timePublished = $timePublished;
  }
  public function getTimePublished() {
    return $this->timePublished;
  }
  public function setPlaylistId($playlistId) {
    $this->playlistId = $playlistId;
  }
  public function getPlaylistId() {
    return $this->playlistId;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setTimeUpdated($timeUpdated) {
    $this->timeUpdated = $timeUpdated;
  }
  public function getTimeUpdated() {
    return $this->timeUpdated;
  }
  public function setPosition($position) {
    $this->position = $position;
  }
  public function getPosition() {
    return $this->position;
  }
}

class PlaylistListResponse extends apiModel {
  public $kind;
  public $etag;
  protected $__playlistsType = 'Playlist';
  protected $__playlistsDataType = 'array';
  public $playlists;
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
  public function setPlaylists(/* array(Playlist) */ $playlists) {
    $this->assertIsArray($playlists, 'Playlist', __METHOD__);
    $this->playlists = $playlists;
  }
  public function getPlaylists() {
    return $this->playlists;
  }
}

class PlaylistSnippet extends apiModel {
  public $title;
  public $tags;
  public $description;
  public $timeCreated;
  public $author;
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setTags(/* array(string) */ $tags) {
    $this->assertIsArray($tags, 'string', __METHOD__);
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setTimeCreated($timeCreated) {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated() {
    return $this->timeCreated;
  }
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
}

class ResourceId extends apiModel {
  public $type;
  public $channelId;
  public $playlistId;
  public $videoId;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setPlaylistId($playlistId) {
    $this->playlistId = $playlistId;
  }
  public function getPlaylistId() {
    return $this->playlistId;
  }
  public function setVideoId($videoId) {
    $this->videoId = $videoId;
  }
  public function getVideoId() {
    return $this->videoId;
  }
}

class SearchListResponse extends apiModel {
  protected $__searchResultsType = 'SearchResult';
  protected $__searchResultsDataType = 'array';
  public $searchResults;
  public $kind;
  public $etag;
  protected $__pageInfoType = 'PageInfo';
  protected $__pageInfoDataType = '';
  public $pageInfo;
  public function setSearchResults(/* array(SearchResult) */ $searchResults) {
    $this->assertIsArray($searchResults, 'SearchResult', __METHOD__);
    $this->searchResults = $searchResults;
  }
  public function getSearchResults() {
    return $this->searchResults;
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
  public function setPageInfo(PageInfo $pageInfo) {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo() {
    return $this->pageInfo;
  }
}

class SearchResult extends apiModel {
  protected $__snippetType = 'SearchResultSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  public $kind;
  public $etag;
  protected $__idType = 'ResourceId';
  protected $__idDataType = '';
  public $id;
  public function setSnippet(SearchResultSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
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
  public function setId(ResourceId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class SearchResultSnippet extends apiModel {
  public $title;
  public $description;
  public $timeCreated;
  public $author;
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setTimeCreated($timeCreated) {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated() {
    return $this->timeCreated;
  }
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
}

class Thumbnail extends apiModel {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Video extends apiModel {
  protected $__statusType = 'VideoStatus';
  protected $__statusDataType = '';
  public $status;
  public $kind;
  protected $__statisticsType = 'VideoStatistics';
  protected $__statisticsDataType = '';
  public $statistics;
  protected $__contentDetailsType = 'VideoContentDetails';
  protected $__contentDetailsDataType = '';
  public $contentDetails;
  protected $__snippetType = 'VideoSnippet';
  protected $__snippetDataType = '';
  public $snippet;
  protected $__playerType = 'VideoPlayer';
  protected $__playerDataType = '';
  public $player;
  public $etag;
  public $id;
  public function setStatus(VideoStatus $status) {
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
  public function setStatistics(VideoStatistics $statistics) {
    $this->statistics = $statistics;
  }
  public function getStatistics() {
    return $this->statistics;
  }
  public function setContentDetails(VideoContentDetails $contentDetails) {
    $this->contentDetails = $contentDetails;
  }
  public function getContentDetails() {
    return $this->contentDetails;
  }
  public function setSnippet(VideoSnippet $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
  }
  public function setPlayer(VideoPlayer $player) {
    $this->player = $player;
  }
  public function getPlayer() {
    return $this->player;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class VideoContentDetails extends apiModel {
  public $duration;
  public $aspectRatio;
  public function setDuration($duration) {
    $this->duration = $duration;
  }
  public function getDuration() {
    return $this->duration;
  }
  public function setAspectRatio($aspectRatio) {
    $this->aspectRatio = $aspectRatio;
  }
  public function getAspectRatio() {
    return $this->aspectRatio;
  }
}

class VideoListResponse extends apiModel {
  public $kind;
  public $etag;
  protected $__videosType = 'Video';
  protected $__videosDataType = 'array';
  public $videos;
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
  public function setVideos(/* array(Video) */ $videos) {
    $this->assertIsArray($videos, 'Video', __METHOD__);
    $this->videos = $videos;
  }
  public function getVideos() {
    return $this->videos;
  }
}

class VideoPlayer extends apiModel {
  public $embed;
  public function setEmbed($embed) {
    $this->embed = $embed;
  }
  public function getEmbed() {
    return $this->embed;
  }
}

class VideoSnippet extends apiModel {
  protected $__thumbnailsType = 'Thumbnail';
  protected $__thumbnailsDataType = 'map';
  public $thumbnails;
  public $title;
  public $channelId;
  public $categoryId;
  public $tags;
  public $description;
  public function setThumbnails(Thumbnail $thumbnails) {
    $this->thumbnails = $thumbnails;
  }
  public function getThumbnails() {
    return $this->thumbnails;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setChannelId($channelId) {
    $this->channelId = $channelId;
  }
  public function getChannelId() {
    return $this->channelId;
  }
  public function setCategoryId($categoryId) {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId() {
    return $this->categoryId;
  }
  public function setTags(/* array(string) */ $tags) {
    $this->assertIsArray($tags, 'string', __METHOD__);
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
}

class VideoStatistics extends apiModel {
  public $commentCount;
  public $viewCount;
  public $favoriteCount;
  public $dislikeCount;
  public $likeCount;
  public function setCommentCount($commentCount) {
    $this->commentCount = $commentCount;
  }
  public function getCommentCount() {
    return $this->commentCount;
  }
  public function setViewCount($viewCount) {
    $this->viewCount = $viewCount;
  }
  public function getViewCount() {
    return $this->viewCount;
  }
  public function setFavoriteCount($favoriteCount) {
    $this->favoriteCount = $favoriteCount;
  }
  public function getFavoriteCount() {
    return $this->favoriteCount;
  }
  public function setDislikeCount($dislikeCount) {
    $this->dislikeCount = $dislikeCount;
  }
  public function getDislikeCount() {
    return $this->dislikeCount;
  }
  public function setLikeCount($likeCount) {
    $this->likeCount = $likeCount;
  }
  public function getLikeCount() {
    return $this->likeCount;
  }
}

class VideoStatus extends apiModel {
  public $privacyStatus;
  public $uploadStatus;
  public $rejectionReason;
  public $failureReason;
  public function setPrivacyStatus($privacyStatus) {
    $this->privacyStatus = $privacyStatus;
  }
  public function getPrivacyStatus() {
    return $this->privacyStatus;
  }
  public function setUploadStatus($uploadStatus) {
    $this->uploadStatus = $uploadStatus;
  }
  public function getUploadStatus() {
    return $this->uploadStatus;
  }
  public function setRejectionReason($rejectionReason) {
    $this->rejectionReason = $rejectionReason;
  }
  public function getRejectionReason() {
    return $this->rejectionReason;
  }
  public function setFailureReason($failureReason) {
    $this->failureReason = $failureReason;
  }
  public function getFailureReason() {
    return $this->failureReason;
  }
}
