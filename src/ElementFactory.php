<?php
/**
 * Daap - Digital Audio Access Protocol library for PHP
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/daap
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Daap;

class ElementFactory
{
    protected $contentTypes = [
        'abal'  => [
            '',
            'daap.browsealbumlistung',
            ElementValueType::MAP,
        ],
        'abar'  => [
            '',
            'daap.browseartistlisting',
            ElementValueType::MAP,
        ],
        'abcp'  => [
            '',
            'daap.browsecomposerlisting',
            ElementValueType::MAP,
        ],
        'abgn'  => [
            '',
            'daap.browsegenrelisting',
            ElementValueType::MAP,
        ],
        'abpl'  => [
            '',
            'daap.baseplaylist',
            ElementValueType::BYTE,
        ],
        'abro'  => [
            '',
            'daap.databasebrowse',
            ElementValueType::MAP,
        ],
        'adbs'  => [
            'repsoonse to a /databases/id/items',
            'daap.databasesongs',
            ElementValueType::MAP,
        ],
        'aeCR'  => [
            '',
            'com.apple.itunes.content-rating',
            ElementValueType::STRING,
        ],
        'aeCS'  => [
            '',
            'com.apple.itunes.artworkchecksum',
            ElementValueType::INT,
        ],
        'aeDL'  => [
            '',
            'com.apple.itunes.drm-downloader-user-id',
            ElementValueType::LONG,
        ],
        'aeDP'  => [
            '',
            'com.apple.itunes.drm-platform-id',
            ElementValueType::INT,
        ],
        'aeDR'  => [
            '',
            'com.apple.itunes.drm-user-id',
            ElementValueType::LONG,
        ],
        'aeDV'  => [
            '',
            'com.apple.itunes.drm-versions',
            ElementValueType::INT,
        ],
        'aeEN'  => [
            '',
            'com.apple.itunes.episode-num-str',
            ElementValueType::INT,
        ],
        'aeES'  => [
            '',
            'com.apple.itunes.episode-sort',
            ElementValueType::INT,
        ],
        'aeFA'  => [
            '',
            'com.apple.itunes.drm-family-id',
            ElementValueType::LONG,
        ],
        'aeGD'  => [
            '',
            'com.apple.itunes.gapless-enc-dr',
            ElementValueType::INT,
        ],
        'aeGE'  => [
            '',
            'com.apple.itunes.gapless-enc-del',
            ElementValueType::INT,
        ],
        'aeGH'  => [
            '',
            'com.apple.itunes.gapless-heur',
            ElementValueType::INT,
        ],
        'aeGR'  => [
            '',
            'com.apple.itunes.gapless-resy',
            ElementValueType::LONG,
        ],
        'aeGU'  => [
            '',
            'com.apple.itunes.gapless-dur',
            ElementValueType::LONG,
        ],
        'aeGs'  => [
            '',
            'com.apple.itunes.can-be-genius-seed',
            ElementValueType::BYTE,
        ],
        'aeHD'  => [
            '',
            'com.apple.itunes.is-hd-video',
            ElementValueType::BYTE,
        ],
        'aeHV'  => [
            '',
            'com.apple.itunes.has-video',
            ElementValueType::BYTE,
        ],
        'aeK1'  => [
            '',
            'com.apple.itunes.drm-key1-id',
            ElementValueType::LONG,
        ],
        'aeK2'  => [
            '',
            'com.apple.itunes.drm-key2-id',
            ElementValueType::LONG,
        ],
        'aeMK'  => [
            '',
            'com.apple.itunes.mediakind',
            ElementValueType::BYTE,
        ],
        'aeMX'  => [
            '',
            'com.apple.itunes.movie-info-xml',
            ElementValueType::STRING,
        ],
        'aeMk'  => [
            '',
            'com.apple.itunes.extended-media-kind',
            ElementValueType::BYTE,
        ],
        'aeND'  => [
            '',
            'com.apple.itunes.non-drm-user-id',
            ElementValueType::LONG,
        ],
        'aeNV'  => [
            '',
            'com.apple.itunes.norm-volume',
            ElementValueType::INT,
        ],
        'aePC'  => [
            '',
            'com.apple.itunes.is-podcast',
            ElementValueType::BYTE,
        ],
        'aePP'  => [
            '',
            'com.apple.itunes.is-podcast-playlist',
            ElementValueType::BYTE,
        ],
        'aePS'  => [
            '',
            'com.apple.itunes.special-playlist',
            ElementValueType::BYTE,
        ],
        'aeSE'  => [
            '',
            'com.apple.itunes.store-pers-id',
            ElementValueType::LONG,
        ],
        'aeSG'  => [
            '',
            'com.apple.itunes.saved-genius',
            ElementValueType::BYTE,
        ],
        'aeSN'  => [
            '',
            'com.apple.itunes.series-name',
            ElementValueType::STRING,
        ],
        'aeSP'  => [
            '',
            'com.apple.itunes.smart-playlist',
            ElementValueType::BYTE,
        ],
        'aeSU'  => [
            '',
            'com.apple.itunes.season-num',
            ElementValueType::INT,
        ],
        'aeXD'  => [
            '',
            'com.apple.itunes.xid',
            ElementValueType::STRING,
        ],
        'aels'  => [
            '',
            'com.apple.itunes.liked-state',
            ElementValueType::BYTE,
        ],
        'agrp'  => [
            '',
            'daap.songgrouping',
            ElementValueType::STRING,
        ],
        'ajal'  => [
            '',
            'com.apple.itunes.store.album-liked-state',
            ElementValueType::BYTE,
        ],
        'aply'  => [
            'response to /databases/id/containers',
            'daap.databaseplaylists',
            ElementValueType::MAP,
        ],
        'apro'  => [
            '',
            'daap.protocolversion',
            'version',
        ],
        'apso'  => [
            'response to /databases/id/containers/id/items',
            'daap.playlistsongs',
            ElementValueType::MAP,
        ],
        'arif'  => [
            '',
            'daap.resolveinfo',
            ElementValueType::MAP,
        ],
        'arsv'  => [
            '',
            'daap.resolve',
            ElementValueType::MAP,
        ],
        'asaa'  => [
            '',
            'daap.songalbumartist',
            ElementValueType::STRING,
        ],
        'asac'  => [
            '',
            'daap.songartworkcount',
            ElementValueType::SHORT,
        ],
        'asai'  => [
            '',
            'daap.songalbumid',
            ElementValueType::LONG,
        ],
        'asal'  => [
            'the song ones should be self exp.',
            'daap.songalbum',
            ElementValueType::STRING,
        ],
        'asar'  => [
            '',
            'daap.songartist',
            ElementValueType::STRING,
        ],
        'asas'  => [
            '',
            'daap.songalbumuserratingstatus',
            ElementValueType::BYTE,
        ],
        'asbk'  => [
            '',
            'daap.bookmarkable',
            ElementValueType::BYTE,
        ],
        'asbr'  => [
            '',
            'daap.songbitrate',
            ElementValueType::SHORT,
        ],
        'asbt'  => [
            '',
            'daap.songsbeatsperminute',
            ElementValueType::SHORT,
        ],
        'ascd'  => [
            '',
            'daap.songcodectype',
            ElementValueType::INT,
        ],
        'ascm'  => [
            '',
            'daap.songcomment',
            ElementValueType::STRING,
        ],
        'ascn'  => [
            '',
            'daap.songcontentdescription',
            ElementValueType::STRING,
        ],
        'asco'  => [
            '',
            'daap.songcompilation',
            ElementValueType::BYTE,
        ],
        'ascp'  => [
            '',
            'daap.songcomposer',
            ElementValueType::STRING,
        ],
        'ascr'  => [
            '',
            'daap.songcontentrating',
            ElementValueType::BYTE,
        ],
        'ascs'  => [
            '',
            'daap.songcodecsubtype',
            ElementValueType::INT,
        ],
        'asct'  => [
            '',
            'daap.songcategory',
            ElementValueType::STRING,
        ],
        'asda'  => [
            '',
            'daap.songdateadded',
            'date',
        ],
        'asdb'  => [
            '',
            'daap.songdisabled',
            ElementValueType::BYTE,
        ],
        'asdc'  => [
            '',
            'daap.songdisccount',
            ElementValueType::SHORT,
        ],
        'asdk'  => [
            '',
            'daap.songdatakind',
            ElementValueType::BYTE,
        ],
        'asdm'  => [
            '',
            'daap.songdatemodified',
            'date',
        ],
        'asdn'  => [
            '',
            'daap.songdiscnumber',
            ElementValueType::SHORT,
        ],
        'asdt'  => [
            '',
            'daap.songdescription',
            ElementValueType::STRING,
        ],
        'ased'  => [
            '',
            'daap.songextradata',
            ElementValueType::SHORT,
        ],
        'aseq'  => [
            '',
            'daap.songeqpreset',
            ElementValueType::STRING,
        ],
        'ases'  => [
            '',
            'daap.songexcludefromshuffle',
            ElementValueType::BYTE,
        ],
        'asfm'  => [
            '',
            'daap.songformat',
            ElementValueType::STRING,
        ],
        'asgn'  => [
            '',
            'daap.songgenre',
            ElementValueType::STRING,
        ],
        'asgp'  => [
            '',
            'daap.songgapless',
            ElementValueType::BYTE,
        ],
        'ashp'  => [
            '',
            'daap.songhasbeenplayed',
            ElementValueType::BYTE,
        ],
        'askd'  => [
            '',
            'daap.songlastskipdate',
            'date',
        ],
        'askp'  => [
            '',
            'daap.songuserskipcount',
            ElementValueType::INT,
        ],
        'aslr'  => [
            '',
            'daap.songalbumuserrating',
            ElementValueType::BYTE,
        ],
        'asls'  => [
            '',
            'daap.songlongsize',
            ElementValueType::LONG,
        ],
        'aspc'  => [
            '',
            'daap.songuserplaycount',
            ElementValueType::INT,
        ],
        'aspl'  => [
            '',
            'daap.songdateplayed',
            'date',
        ],
        'aspu'  => [
            '',
            'daap.songpodcasturl',
            ElementValueType::STRING,
        ],
        'asri'  => [
            '',
            'daap.songartistid',
            ElementValueType::LONG,
        ],
        'asrs'  => [
            '',
            'daap.songuserratingstatus',
            ElementValueType::BYTE,
        ],
        'asrv'  => [
            '',
            'daap.songrelativevolume',
            ElementValueType::BYTE,
        ],
        'assa'  => [
            '',
            'daap.sortartist',
            ElementValueType::STRING,
        ],
        'assc'  => [
            '',
            'daap.sortcomposer',
            ElementValueType::STRING,
        ],
        'assl'  => [
            '',
            'daap.sortalbumartist',
            ElementValueType::STRING,
        ],
        'assn'  => [
            '',
            'daap.sortname',
            ElementValueType::STRING,
        ],
        'assp'  => [
            '(in milliseconds)',
            'daap.songstoptime ',
            ElementValueType::INT,
        ],
        'assr'  => [
            '',
            'daap.songsamplerate',
            ElementValueType::INT,
        ],
        'asss'  => [
            '',
            'daap.sortseriesname',
            ElementValueType::STRING,
        ],
        'asst'  => [
            '(in milliseconds)',
            'daap.songstarttime ',
            ElementValueType::INT,
        ],
        'assu'  => [
            '',
            'daap.sortalbum',
            ElementValueType::STRING,
        ],
        'assz'  => [
            '',
            'daap.songsize',
            ElementValueType::INT,
        ],
        'astc'  => [
            '',
            'daap.songtrackcount',
            ElementValueType::SHORT,
        ],
        'astm'  => [
            '(in milliseconds)',
            'daap.songtime',
            ElementValueType::INT,
        ],
        'astn'  => [
            '',
            'daap.songtracknumber',
            ElementValueType::SHORT,
        ],
        'asul'  => [
            '',
            'daap.songdataurl',
            ElementValueType::STRING,
        ],
        'asur'  => [
            '',
            'daap.songuserrating',
            ElementValueType::BYTE,
        ],
        'asyr'  => [
            '',
            'daap.songyear',
            ElementValueType::SHORT,
        ],
        'avdb'  => [
            'response to a /databases',
            'daap.serverdatabases',
            ElementValueType::MAP,
        ],
        'cmvo'  => [
            'volume',
            'daap.volume',
            ElementValueType::INT,
        ],
        'cant'  => [
            'song time remaining',
            'daap.songtimeremaining',
            ElementValueType::INT,
        ],
        'cast'  => [
            'song time total',
            'daap.songtimetotal',
            ElementValueType::INT,
        ],
        'caps'  => [
            'play status',
            'daap.playstatus',
            ElementValueType::STRING,
        ],
        'cash'  => [
            'play shuffle',
            'daap.playshuffle',
            ElementValueType::STRING,
        ],
        'carp'  => [
            'play repeat',
            'daap.playrepeat',
            ElementValueType::STRING,
        ],
        'cmgt'  => [
            'container',
            'daap.container',
            ElementValueType::MAP,
        ],
        'cmst'  => [
            'control container',
            'daap.controlcontainer',
            ElementValueType::MAP,
        ],
        'mbcl'  => [
            '',
            'dmap.bag',
            ElementValueType::MAP,
        ],
        'mccr'  => [
            'the response to the content-codes request',
            'dmap.contentcodesresponse',
            ElementValueType::MAP,
        ],
        'mcna'  => [
            'the full name of the code',
            'dmap.contentcodesname',
            ElementValueType::STRING,
        ],
        'mcnm'  => [
            'the four letter code',
            'dmap.contentcodesnumber',
            ElementValueType::INT,
        ],
        'mcon'  => [
            'an arbitrary container',
            'dmap.container',
            ElementValueType::MAP,
        ],
        'mctc'  => [
            '',
            'dmap.containercount',
            ElementValueType::INT,
        ],
        'mcti'  => [
            'the id of an item in its container',
            'dmap.containeritemid',
            ElementValueType::INT,
        ],
        'mcty'  => [
            'the type of the code (see appendix b for type values)',
            'dmap.contentcodestype',
            ElementValueType::SHORT,
        ],
        'mdcl'  => [
            'a dictionary entry',
            'dmap.dictionary',
            ElementValueType::MAP,
        ],
        'mdst'  => [
            '',
            'dmap.downloadstatus',
            ElementValueType::BYTE,
        ],
        'meia'  => [
            '',
            'dmap.itemdateadded',
            'date',
        ],
        'meip'  => [
            '',
            'dmap.itemdateplayed',
            'date',
        ],
        'mext'  => [
            '',
            'dmap.objectextradata',
            ElementValueType::SHORT,
        ],
        'miid'  => [
            'an item\'s id',
            'dmap.itemid',
            ElementValueType::INT,
        ],
        'mikd'  => [
            'the kind of item.  So far, only \'2\' has been seen, an audio file?',
            'dmap.itemkind',
            ElementValueType::BYTE,
        ],
        'mimc'  => [
            'number of items in a container',
            'dmap.itemcount',
            ElementValueType::INT,
        ],
        'minm'  => [
            'an items name',
            'dmap.itemname',
            ElementValueType::STRING,
        ],
        'mlcl'  => [
            'a list',
            'dmap.listing',
            ElementValueType::MAP,
        ],
        'mlid'  => [
            'the session id for the login session',
            'dmap.sessionid',
            ElementValueType::INT,
        ],
        'mlit'  => [
            'a single item in said list',
            'dmap.listingitem',
            ElementValueType::MAP,
        ],
        'mlog'  => [
            'response to a /login',
            'dmap.loginresponse',
            ElementValueType::MAP,
        ],
        'mpco'  => [
            '',
            'dmap.parentcontainerid',
            ElementValueType::INT,
        ],
        'mper'  => [
            'a persistent id',
            'dmap.persistentid',
            ElementValueType::LONG,
        ],
        'mpro'  => [
            '',
            'dmap.protocolversion',
            'version',
        ],
        'mrco'  => [
            'number of items returned in a request',
            'dmap.returnedcount',
            ElementValueType::INT,
        ],
        'msal'  => [
            '',
            'dmap.supportsuatologout',
            ElementValueType::BYTE,
        ],
        'msau'  => [
            '',
            'dmap.authenticationmethod',
            ElementValueType::BYTE,
        ],
        'msaud' => [
            '(should be self explanatory)',
            'dmap.authenticationmethod',
            ElementValueType::BYTE,
        ],
        'msbr'  => [
            '',
            'dmap.supportsbrowse',
            ElementValueType::BYTE,
        ],
        'msdc'  => [
            '',
            'dmap.databasescount',
            ElementValueType::INT,
        ],
        'msex'  => [
            '',
            'dmap.supportsextensions',
            ElementValueType::BYTE,
        ],
        'msix'  => [
            '',
            'dmap.supportsindex',
            ElementValueType::BYTE,
        ],
        'mslr'  => [
            '',
            'dmap.loginrequired',
            ElementValueType::BYTE,
        ],
        'mspi'  => [
            '',
            'dmap.supportspersistentids',
            ElementValueType::BYTE,
        ],
        'msqy'  => [
            '',
            'dmap.supportsquery',
            ElementValueType::BYTE,
        ],
        'msrs'  => [
            '',
            'dmap.supportsresolve',
            ElementValueType::BYTE,
        ],
        'msrv'  => [
            'response to a /server-info',
            'dmap.serverinforesponse',
            ElementValueType::MAP,
        ],
        'mstm'  => [
            '',
            'dmap.timeoutinterval',
            ElementValueType::INT,
        ],
        'msts'  => [
            '',
            'dmap.statusstring',
            ElementValueType::STRING,
        ],
        'mstt'  => [
            'the response status code, these appear to be http status codes, e.g. 200',
            'dmap.status',
            ElementValueType::INT,
        ],
        'msup'  => [
            '',
            'dmap.supportsupdate',
            ElementValueType::BYTE,
        ],
        'msur'  => [
            'revision to use for requests',
            'dmap.serverrevision',
            ElementValueType::INT,
        ],
        'mtco'  => [
            '',
            'dmap.specifiedtotalcount number of items in response to a request',
            ElementValueType::INT,
        ],
        'mudl'  => [
            'used in updates?  (document soon)',
            'dmap.deletedidlisting',
            ElementValueType::MAP,
        ],
        'mupd'  => [
            'response to a /update',
            'dmap.updateresponse',
            ElementValueType::MAP,
        ],
        'musr'  => [
            '',
            'dmap.serverrevision',
            ElementValueType::INT,
        ],
        'muty'  => [
            '',
            'dmap.updatetype',
            ElementValueType::BYTE,
        ],
        'prsv'  => [
            '',
            'daap.resolve',
            ElementValueType::MAP,
        ],
    ];

    public function add($code, $description, $name, $type)
    {
        $this->contentTypes[$code] = [$description, $name, $type];
    }

    public function create($actualCode)
    {
        foreach ($this->contentTypes as $code => list($description, $name, $type)) {
            if ($code === $actualCode) {
                return new Element($code, $description, $name, $type);
            }
        }

        return new Element($actualCode, 'Unknown tag', '', ElementValueType::BYTE);
    }

    public function find($actualCode)
    {
        foreach (array_keys($this->contentTypes) as $code) {
            if ($code === $actualCode) {
                return true;
            }
        }

        return false;
    }
}