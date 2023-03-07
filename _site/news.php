<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="qBittorrent Official Website">
    <meta name="keywords" content="qBittorrent, torrent client, BitTorrent protocol, cross-platform, free and open-source software, GNU GPL, libtorrent-rasterbar, Qt, C++">
    <meta name="author" content="qBittorrent Development Team: https://github.com/qbittorrent">
    <meta name="robots" content="NOODP">
    <meta name="google-site-verification" content="2P14de1zV_NTk03Ebnc0wpPKWaeJoj7B9Tc_HtRkOfE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>qBittorrent Official Website</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" sizes="16x16 32x32 64x64">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/TLbanner.css">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->

    <link rel="dns-prefetch" href="http://git.qbittorrent.org">
    <link rel="dns-prefetch" href="http://bugs.qbittorrent.org">
    <link rel="dns-prefetch" href="http://wiki.qbittorrent.org">
    <link rel="dns-prefetch" href="http://forum.qbittorrent.org">
  </head>
  <body>
    <span id="forkongithub">
      <a href="download.php">Latest: v4.5.2</a>
    </span>

    <div id="MainBox">
      <div id="LogoChris">
        <img src="img/qb_banner.png" alt="qBittorrent" style="transform: translateY(-50%);" class="banner"/>
      </div>

      <div class="menu">
        <ul>
          <li class="first"><a href="/">Home</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="http://forum.qbittorrent.org" target="_blank">Forum</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="https://sourceforge.net/projects/qbittorrent/#screenshots">Screenshots</a></li>
          <li><a href="http://wiki.qbittorrent.org" target="_blank">Wiki</a></li>
          <li><a href="http://git.qbittorrent.org" target="_blank">Development</a></li>
          <li><a href="http://bugs.qbittorrent.org" target="_blank">Bugs</a></li>
        </ul>
      </div>

      <div class="wrapper">
        <div class="wrapper-top">
          <div class="wrapper-bottom">
            <div id="content">
              <div class="stretcher" id="StretchHome">
              
<h3>Tuesday Feb 28th 2023 - qBittorrent v4.5.2 release</h3>
<p>qBittorrent v4.5.2 was released.<br>
<strong>SECURITY:</strong> This version contains a security bugfix in the web server. The bug allowed for any file on the user's filesystem to be served without any authentication. This affects users that have enabled the WebUI/WebAPI. It seems to affect only v4.5.0 and v4.5.1 on Windows.<br>
NOTE: macOS builds are self-signed now. It should help with macOS permissions dialogs.</p>
<details>
<summary>Library versions</summary>
<table>
  <thead>
    <tr>
      <th>Library</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>libtorrent</td>
      <td>1.2.18+gitd22612ca1b / 2.0.8+git06f98369cb</td>
    </tr>
    <tr>
      <td>Qt</td>
      <td>5.15.8 / 6.4.2</td>
    </tr>
    <tr>
      <td>Boost</td>
      <td>1.81</td>
    </tr>
  </tbody>
</table>
</details>
<p>v4.5.2 changelog:</p>
<ul>
<li>BUGFIX: Don't unexpectedly activate queued torrents when prefetching metadata for added magnets (glassez)</li>
<li>BUGFIX: Update the cached torrent state once recheck is started (glassez)</li>
<li>BUGFIX: Be more likely to allow the system to use power saving modes (glassez)</li>
<li>WEBUI: Migrate away from unsafe function (Chocobo1)</li>
<li>WEBUI: Blacklist bad ciphers for TLS in the server (sledgehammer999)</li>
<li>WEBUI: Allow only TLS 1.2+ in the server (sledgehammer999)</li>
<li>WEBUI: Allow to set read-only directory as torrent location (glassez)</li>
<li>WEBUI: Reject requests that contain backslash in path (glassez)</li>
<li>RSS: Prevent RSS folder from being moved into itself (glassez)</li>
<li>WINDOWS: NSIS: Update Turkish, Uzbek translation (Burak Yavuz, shitcod3r)</li>
</ul>
<h3>Sunday Feb 12th 2023 - qBittorrent v4.5.1 release</h3>
<p>qBittorrent v4.5.1 was released.<br>
<strong>NOTE:</strong> macOS builds are self-signed now.</p>
<details>
<summary>Library versions</summary>
<table>
  <thead>
    <tr>
      <th>Library</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>libtorrent</td>
      <td>1.2.18+gitd22612ca1b / 2.0.8+gited3c8a920e</td>
    </tr>
    <tr>
      <td>Qt</td>
      <td>5.15.8 / 6.4.2</td>
    </tr>
    <tr>
      <td>Boost</td>
      <td>1.81</td>
    </tr>
  </tbody>
</table>
</details>
<p>v4.5.1 changelog:</p>
<ul>
<li>FEATURE: Re-allow to use icons from system theme (glassez)</li>
<li>BUGFIX: Fix Speed limit icon size (now-im)</li>
<li>BUGFIX: Revise and fix some text colors (Chocobo1, now-im)</li>
<li>BUGFIX: Correctly load folder based UI theme (glassez)</li>
<li>BUGFIX: Fix crash due to invalid encoding of tracker URLs (glassez)</li>
<li>BUGFIX: Don't drop !qB extension when renaming incomplete file (glassez)</li>
<li>BUGFIX: Correctly count the number of torrents in subcategories (glassez)</li>
<li>BUGFIX: Use &quot;additional trackers&quot; when metadata retrieving (glassez)</li>
<li>BUGFIX: Apply correct tab order to Category options dialog (glassez)</li>
<li>BUGFIX: Add all torrents passed via the command line (glassez)</li>
<li>BUGFIX: Fix startup performance on Qt5 (glassez)</li>
<li>BUGFIX: Automatic move will now overwrite existing files (aka previous behavior) (glassez)</li>
<li>BUGFIX: Some fixes for loading Chinese locales (sledgehammer999)</li>
<li>BUGFIX: New Pause icon color for toolbar/menu (now-im, sledgehammer999)</li>
<li>BUGFIX: Adjust env variable for PDB discovery (sledgehammer999)</li>
<li>WEBUI: Fix missing &quot;queued&quot; icon (thalieht)</li>
<li>WEBUI: Return paths using platform-independent separator format (glassez)</li>
<li>WEBUI: Change order of accepted types of file input (Jason Carr)</li>
<li>WEBUI: Add missing icons (brvphoenix)</li>
<li>WEBUI: Add &quot;Resume data storage type&quot; option (thalieht)</li>
<li>WEBUI: Make rename file dialog resizable (Torsten Schwarz)</li>
<li>WEBUI: Prevent incorrect line breaking (David Xuang)</li>
<li>WEBUI: Improve hotkeys (Fidel Selva)</li>
<li>WEBUI: Remove suggestions while searching for torrents (Midhun V Nadh)</li>
<li>WEBUI: Expose &quot;IS PRIVATE&quot; flag (sotiris-bos)</li>
<li>WEBUI: Return name/hash/infohash_v1/infohash_v2 torrent properties (qbittorrentfan)</li>
<li>WINDOWS: Correctly detect drive letter in path (glassez)</li>
<li>WINDOWS: NSIS: Update Swedish, Lithuanian translations (Jonatan, Deividas)</li>
<li>LINUX: Fix tray icon issues (glassez)</li>
</ul>
<h3>Sunday Nov 27th 2022 - qBittorrent v4.5.0 release</h3>
<p>qBittorrent v4.5.0 was released.<br>
A lot of work has gone into this release which isn't necessarily reflected in the changelog below (code improvements, rewritings and refactorings). Special thank you to people that were helpful in other useful areas like testing and bug hunting: <a href="https://github.com/thalieht">@thalieht</a>, <a href="https://github.com/xavier2k6">@xavier2k6</a>, <a href="https://github.com/PriitUring">@PriitUring</a>, <a href="https://github.com/oorzkws">@oorzkws</a><br>
Notable features: New icon theme, new color theme and better startup time when using many torrents.<br>
<strong>WINDOWS:</strong> Only 64-bit builds will be offered from now on.<br>
<strong>NOTE:</strong> The default builds for all OSs switched to libtorrent 1.2.x from 2.0.x. Builds for libtorrent 2.0.x are also offered and are tagged with <code>lt20</code>. The switch happened due to user demand and perceived performance issues. If until now you didn't experience any performance issue then go ahead and use the <code>lt20</code> builds.</p>
<details>
<summary>Library versions</summary>
<table>
  <thead>
    <tr>
      <th>Library</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>libtorrent</td>
      <td>1.2.18+gitcd05e947f6 / 2.0.8+git64817e0e87</td>
    </tr>
    <tr>
      <td>Qt</td>
      <td>5.15.7 / 6.4.0</td>
    </tr>
    <tr>
      <td>Boost</td>
      <td>1.80</td>
    </tr>
  </tbody>
</table>
</details>
<p>v4.5.0 changelog:</p>
<ul>
<li>FEATURE: Add <code>Auto resize columns</code> functionality (Chocobo1)</li>
<li>FEATURE: Allow to use Category paths in <code>Manual</code> mode (glassez)</li>
<li>FEATURE: Allow to disable Automatic mode when default &quot;temp&quot; path changed (glassez)</li>
<li>FEATURE: Add tuning options related to performance warnings (Chocobo1)</li>
<li>FEATURE: Add right click menu for status filters (An0n)</li>
<li>FEATURE: Allow setting the number of maximum active checking torrents (An0n)</li>
<li>FEATURE: Add option to toggle filters sidebar (AbeniMatteo)</li>
<li>FEATURE: Allow to set <code>working set limit</code> on non-Windows OS (Chocobo1)</li>
<li>FEATURE: Add <code>Export .torrent</code> action (Chocobo1)</li>
<li>FEATURE: Add keyboard navigation keys (itlezy)</li>
<li>FEATURE: Allow to use POSIX-compliant disk IO type (Coda)</li>
<li>FEATURE: Add <code>Filter files</code> field in new torrent dialog (thalieht)</li>
<li>FEATURE: Implement new icon/color theme (now-im, xavier2k6)</li>
<li>FEATURE: Add file name filter/blacklist (mxtsdev, thalieht)</li>
<li>FEATURE: Add support for custom SMTP ports (Emil M George)</li>
<li>FEATURE: Split the OS cache settings into Disk IO read/write modes (summer)</li>
<li>FEATURE: When duplicate torrent is added set metadata to existing one (glassez)</li>
<li>FEATURE: Greatly improve startup time with many torrents (glassez, jagannatharjun)</li>
<li>FEATURE: Add keyboard shortcut to Download URL dialog (Chocobo1)</li>
<li>FEATURE: Add ability to run external program on torrent added (glassez)</li>
<li>FEATURE: Add infohash and download path columns (tristanleboss)</li>
<li>FEATURE: Allow to set torrent stop condition (glassez, thalieht)</li>
<li>FEATURE: Add a <code>Moving</code> status filter (tristanleboss)</li>
<li>FEATURE: Change color palettes for both dark, light themes (Chocobo1)</li>
<li>FEATURE: Add a <code>Use proxy for hostname lookup</code> option (Nathan Lewis)</li>
<li>FEATURE: Introduce a <code>change listen port</code> cmd option (BallsOfSpaghetti)</li>
<li>FEATURE: Implement <code>Peer ID Client</code> column for <code>Peers</code> tab (Hanabishi)</li>
<li>FEATURE: Add port forwarding option for embedded tracker (Chocobo1)</li>
<li>BUGFIX: Store hybrid torrents using <code>torrent ID</code> as basename (glassez)</li>
<li>BUGFIX: Enable Combobox editor for the <code>Mixed</code> file download priority (Aleksandr Cupacenko)</li>
<li>BUGFIX: Allow shortcut folders for the Open and Save directory dialogs (Aleksandr Cupacenko)</li>
<li>BUGFIX: Rename content tab <code>Size</code> column to <code>Total Size</code> (Aleksandr Cupacenko)</li>
<li>BUGFIX: Fix scrolling to the lowermost visible torrent (Aleksandr Cupacenko)</li>
<li>BUGFIX: Allow changing file priorities for finished torrents (An0n)</li>
<li>BUGFIX: Focus save path when Manual mode is selected initially (Aleksandr Cupacenko)</li>
<li>BUGFIX: Disable force reannounce when it is not possible (An0n)</li>
<li>BUGFIX: Add horizontal scrolling for tracker list and torrent content (NotTsunami)</li>
<li>BUGFIX: Enlarge &quot;speed limits&quot; icons (Chocobo1)</li>
<li>BUGFIX: Change Downloaded to Times Downloaded in trackers tab (An0n)</li>
<li>BUGFIX: Remove artificial max limits from <code>Torrent Queueing</code> related options (Chocobo1)</li>
<li>BUGFIX: Preserve <code>skip hash check</code> when there is no metadata (glassez)</li>
<li>BUGFIX: Fix DHT/PeX/LSD status when it is globally disabled (Kacper Michajłow)</li>
<li>BUGFIX: Fix rate calculation when interval is too low (glassez)</li>
<li>BUGFIX: Add tooltip message when system tray icon isn't available (Chocobo1)</li>
<li>BUGFIX: Improve sender field in mail notifications (Dmitry Vodopyanov)</li>
<li>BUGFIX: Fix &quot;Add torrent dialog&quot; spill-over on smaller screens (Chocobo1)</li>
<li>BUGFIX: Fix peer count issue when tracker responds with zero figure (summer)</li>
<li>BUGFIX: Don't merge trackers by default (glassez)</li>
<li>BUGFIX: Don't inhibit system sleep/auto shutdown for torrents stuck at downloading metadata (summer)</li>
<li>BUGFIX: Allow to pause a checking torrent from context menu (summer)</li>
<li>BUGFIX: Allow to use subnet notation in reverse proxy list (Chocobo1)</li>
<li>BUGFIX: Fine tune translations loading for Chinese locales (sledgehammer999)</li>
<li>BUGFIX: Fix torrent content checkboxes not updated properly (Chocobo1)</li>
<li>BUGFIX: Correctly load state of <code>Use another path for incomplete torrents</code> in Watched folders (glassez)</li>
<li>BUGFIX: Add confirmation to resume/pause all (BallsOfSpaghetti)</li>
<li>BUGFIX: Fix wrong count of errored trackers (Chocobo1)</li>
<li>WEBUI: Allow blank lines in multipart form-data input (Aleksandr Cupacenko)</li>
<li>WEBUI: Make various dialogs resizable (Chocobo1)</li>
<li>WEBUI: Fix wrong v2 hash string displayed (Chocobo1)</li>
<li>WEBUI: WebAPI: return correct status (Requi)</li>
<li>WEBUI: Fix empty selection in language combobox (Chocobo1)</li>
<li>WEBUI: Store WebUI port setting in human readable number (Chocobo1)</li>
<li>WEBUI: Add support for exporting .torrent (Tom Piccirello)</li>
<li>WEBUI: WebAPI: Add endpoint to set speed limit mode (glassez)</li>
<li>WEBUI: Improve progress bar rendering (Mike Lei)</li>
<li>WEBUI: Add transfer list refresh interval settings (summer)</li>
<li>WEBUI: Use natural sort (Chocobo1)</li>
<li>WEBUI: Apply i18n translation only to built-in WebUI (Chocobo1)</li>
<li>WEBUI: Alert when HTTPS settings are incomplete (Chocobo1)</li>
<li>WEBUI: Handle drag and drop events (Chocobo1)</li>
<li>WEBUI: Fix wrong behavior for shutdown action (Chocobo1)</li>
<li>WEBUI: Don't disable combobox for file priority (Chocobo1)</li>
<li>RSS: Increase limit of maximum number of articles per feed (summer)</li>
<li>WINDOWS: Fix <code>Open destination folder</code> delay on Windows (Andrew)</li>
<li>WINDOWS: NSIS: Update Russian, Estonian, Japanese, Dutch, Portuguese BR, German and Indonesian translations (Andrei Stepanov, Priit Uring, maboroshin, Thomas De Rocker, Ícaro, schnurlos, Faisal A. F. Rahman)</li>
<li>LINUX: Mark as single window app in .desktop file (Nicolas Fella)</li>
<li>LINUX: Add Dockerfile (Amanuense-del-diavolo, Tom Piccirello, Chocobo1)</li>
<li>LINUX: Remove option of using icons from system theme (now-im)</li>
<li>MACOS: Fix wrong background color in properties widget (NotTsunami)</li>
<li>OTHER: Binary distributions of qbittorrent are GPLv3+ licensed (sledgehammer999)</li>
</ul>
<h3>Thursday Sep 29th 2022 - qBittorrent v4.5.0beta1 release</h3>
<p>qBittorrent v4.5.0beta1 was released.<br>
This is the first beta release for the upcoming 4.5.x series. More beta releases will follow.<br>
At this point, no changelog is provided. Also no source tarballs. If you want build from source then just use the relevant git tag.</p>
<details>
<summary>Library versions</summary>
<table>
  <thead>
    <tr>
      <th>Library</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>libtorrent</td>
      <td>1.2.17+git700bba089f / 2.0.7+git8786d17e59</td>
    </tr>
    <tr>
      <td>Qt</td>
      <td>5.15.6 / 6.3.0</td>
    </tr>
    <tr>
      <td>Boost</td>
      <td>1.80</td>
    </tr>
  </tbody>
</table>
</details>
<h3>Tuesday Aug 30th 2022 - qBittorrent v4.4.5 release</h3>
<p>qBittorrent v4.4.5 was released.<br>
<strong>NOTE:</strong> The default builds for all OSs switched to libtorrent 1.2.x (<code>RC_1_2</code>) from 2.0.x (<code>RC_2_0</code>). Builds for libtorrent 2.0.x are also offered and are tagged with <code>RC_2_0</code>. The switch happened due to user demand and perceived performance issues. If until now you didn't experience any performance issue then go ahead and use the <code>RC_2_0</code> builds.<br>
<strong>MACOS:</strong> The macOS version is not well supported, because we don't have active macOS developers/contributors. The project is in need of macOS developers. If you are a macOS developer willing to help, just go to our bug tracker for a list of macOS related issues. Or try to fix bugs that you yourself have discovered and annoy you.</p>
<p>v4.4.5 changelog:</p>
<ul>
<li>BUGFIX: Fix missing trackers when adding magnet link. Affects libtorrent 2.0.x builds. (glassez)</li>
</ul>
<h3>Monday Aug 22nd 2022 - qBittorrent v4.4.4 release</h3>
<p>qBittorrent v4.4.4 was released.<br>
<strong>MACOS:</strong> Now a build based on libtorrent 1.2.x (RC_1_2 branch) is offered too. The macOS version is not well supported, because we don't have active macOS developers/contributors. The project is in need of macOS developers. If you are a macOS developer willing to help, just go to our bug tracker for a list of macOS related issues. Or try to fix bugs that you yourself have discovered and annoy you.</p>
<p>v4.4.4 changelog:</p>
<ul>
<li>BUGFIX: Correctly handle data decompression with Qt 6.3 (brvphoenix)</li>
<li>BUGFIX: Fix wrong file names displayed in tooltip (Chocobo1)</li>
<li>BUGFIX: Fix incorrect &quot;max outgoing port&quot; setting (glassez)</li>
<li>BUGFIX: Make working set limit available only on libtorrent 2.0.x builds (summer)</li>
<li>BUGFIX: Try to recover missing tags (summer)</li>
<li>RSS: Clear RSS parsing error after use (glassez)</li>
<li>WEBAPI: Set HTTP method restriction on WebAPI actions (Chocobo1)</li>
<li>WINDOWS: Work around application stuttering on Windows (Chocobo1)</li>
<li>WINDOWS: NSIS: Update Portuguese, Italian, Korean, Latvian translations(Blackspirits, bovirus, Minseo Lee, Coool)</li>
<li>LINUX: Improve D-Bus notifications handling (glassez)</li>
<li>MACOS: Open destination folders on macOS in separate thread (Nick Korotysh)</li>
</ul>
<h3>Wednesday May 25th 2022 - qBittorrent v4.4.3.1 release</h3>
<p>qBittorrent v4.4.3.1 was released.<br>
Translations were broken with v4.4.3 and now are fixed.<br></p>
<h3>Sunday May 22nd 2022 - qBittorrent v4.4.3 release</h3>
<p>qBittorrent v4.4.3 was released.<br>
The issue with white/invisible text on the progress bar is now fixed with Qt 6.3.0.<br>
<strong>WINDOWS:</strong> Users of Windows 10+ can also use the Qt6 version of the installer. Qt6 offers better HiDPI compatibility. The Qt6 version isn't tested much. The v4.4.x series will probably be the last one that supports Qt5 and therefore Windows 7 and 8. It will see releases at least until the summer of 2022.<br>
<strong>LINUX:</strong> An AppImage is now offered. It uses the latest versions of Qt6, libtorrent, boost, openssl. It is created on Ubuntu 20.04 and it should work on any other similarly aged distro. It isn't well tested. Also Ubuntu 20.04 is dropped from the PPAs because it doesn't have the minimum required Qt5 version (5.15.2). The AppImage should cover any users left on that version.<br>
<strong>MACOS:</strong> Universal DMGs are now offered. They should work natively on both M1 and Intel devices. Minimum supported OS version is macOS 10.15 Catalina.<br>version(if available) until it is resolved. Qt6 has fixed the issue upstream but hasn't made a release with it yet.</p>
<p>v4.4.3 changelog:</p>
<ul>
<li>BUGFIX: Correctly handle changing of temp save path (glassez)</li>
<li>BUGFIX: Fix storage in SQLite (glassez)</li>
<li>BUGFIX: Correctly apply content layout when &quot;Skip hash check&quot; is enabled (glassez)</li>
<li>BUGFIX: Don't corrupt IDs of v2 torrents (glassez)</li>
<li>BUGFIX: Reduce the number of hashing threads by default (improves hashing speed on HDDs) (summer)</li>
<li>BUGFIX: Prevent the &quot;update dialog&quot; from blocking input on other windows (summer)</li>
<li>BUGFIX: Add trackers in exported .torrent files (glassez)</li>
<li>BUGFIX: Fix wrong GUI behavior in &quot;Optional IP address to bind to&quot; setting (Chocobo1)</li>
<li>WEBUI: Fix WebUI crash due to missing tags from config (An0n)</li>
<li>WEBUI: Show correct location path (Chocobo1)</li>
<li>MACOS: Fix main window freezing after opening a files dialog (glassez)</li>
</ul>
<h3>Thursday March 24th 2022 - qBittorrent v4.4.2 release</h3>
<p>qBittorrent v4.4.2 was released.<br>
<strong>WINDOWS:</strong> Users of Windows 10+ can also use the Qt6 version of the installer. Qt6 offers better HiDPI compatibility. The Qt6 version isn't tested much. The v4.4.x series will probably be the last one that supports Qt5 and therefore Windows 7 and 8. It will see releases at least until the summer of 2022.<br>
<strong>LINUX:</strong> An AppImage is now offered. It uses the latest versions of Qt6, libtorrent, boost, openssl. It is created on Ubuntu 20.04 and it should work on any other similarly aged distro. It isn't well tested. Also Ubuntu 20.04 is dropped from the PPAs because it doesn't have the minimum required Qt5 version (5.15.2). The AppImage should cover any users left on that version.<br>
<strong>MACOS:</strong> Universal DMGs are now offered. They should work natively on both M1 and Intel devices. Minimum supported OS version is macOS 10.15 Catalina.<br>
<strong>Known Issue(all platforms):</strong> The text on the progress bar may have wrong color or not appear at all when using the Qt6 version. You may switch to the Qt5 version(if available) until it is resolved. Qt6 has fixed the issue upstream but hasn't made a release with it yet.</p>
<p>v4.4.2 changelog:</p>
<ul>
<li>FEATURE: Allow to limit max memory working set size (glassez)</li>
<li>BUGFIX: Fix UI crash when torrent is in a non-existent category (Kevin Cox)</li>
<li>BUGFIX: Correctly handle changing of global save paths (glassez)</li>
<li>BUGFIX: Disable performance alert (Chocobo1)</li>
<li>BUGFIX: Prevent loading resume data with inconsistent ID (glassez)</li>
<li>BUGFIX: Properly handle metadata download for an existing torrent (glassez)</li>
<li>BUGFIX: Prevent crash when open torrent destination folder (glassez)</li>
<li>WINDOWS: NSIS: Update Spanish, Spanish International and French translations(Juanjo Jiménez, RqndomHax)</li>
</ul>
<h3>Tuesday February 15th 2022 - qBittorrent v4.4.1 release</h3>
<p>qBittorrent v4.4.1 was released.<br>
<strong>WINDOWS:</strong> Users of Windows 10+ can also use the Qt6 version of the installer. Qt6 offers better HiDPI compatibility. Known issue: The text on the progress bar may have wrong color or not appear at all. You may switch to the regular version(Qt5 based) until it is resolved. The Qt6 version isn't tested much. The v4.4.x series will probably be the last one that supports Qt5 and therefore Windows 7 and 8. It will see releases at least until the summer of 2022.<br>
<strong>LINUX:</strong> An AppImage is now offered. It uses the latest versions of Qt6, libtorrent, boost, openssl. It is created on Ubuntu 20.04 and it should work on any other similarly aged distro. It isn't well tested. Also Ubuntu 20.04 is dropped from the PPAs because it doesn't have the minimum required Qt5 version (5.15.2). The AppImage should cover any users left on that version.<br>
<strong>MACOS:</strong> Builds will take a few days to be uploaded.</p>
<p>v4.4.1 changelog:</p>
<ul>
<li>FEATURE: Restore all torrent settings to the torrent's main context menu (thalieht)</li>
<li>FEATURE: Add confirmation for enabling Auto TMM from context menu (thalieht)</li>
<li>FEATURE: Add tooltip to Automatic Torrent Management context menu action (thalieht)</li>
<li>FEATURE: Add Select All/None buttons in new torrent dialog (thalieht)</li>
<li>BUGFIX: Keep &quot;torrent info&quot; alive while generate .torrent file (glassez)</li>
<li>BUGFIX: Correctly handle Auto TMM in Torrent Files Watcher (glassez)</li>
<li>BUGFIX: Correctly track the root folder name change (glassez)</li>
<li>BUGFIX: Various fixes to the moving torrent code (glassez)</li>
<li>BUGFIX: Update the torrent's download path field when changing category (thalieht)</li>
<li>BUGFIX: Correctly handle received metadata (glassez)</li>
<li>BUGFIX: Store hybrid torrents using legacy filenames (glassez)</li>
<li>BUGFIX: Open correct directory when clicked on Browse button (glassez)</li>
<li>BUGFIX: Fix crash when shutting down and clicing on system tray icon (Chocobo1)</li>
<li>BUGFIX: Fix &quot;Free space on disk&quot; in new torrent dialog (thalieht)</li>
<li>BUGFIX: Optimize completed files handling (Prince Gupta)</li>
<li>BUGFIX: Migrate proxy settings (sledgehammer999)</li>
<li>BUGFIX: Try to recover missing categories (glassez)</li>
<li>WEBUI: WebAPI: fix wrong key used for categories (Chocobo1)</li>
<li>WEBUI: Remove hack for outdated IE 6 browser (Chocobo1)</li>
<li>RSS: Correctly handle XML parsing errors (glassez)</li>
</ul>
<h3>Thursday January 06th 2022 - qBittorrent v4.4.0 release</h3>
<p>qBittorrent v4.4.0 was released.<br>
<strong>WINDOWS:</strong> Users of Windows 10+ can also use the Qt6 version of the installer. Qt6 offers better HiDPI compatibility. Known issue: The text on the progress bar may have wrong color or not appear at all. You may switch to the regular version(Qt5 based) until it is resolved. The Qt6 version isn't tested much. The v4.4.x series will probably be the last one that supports Qt5 and therefore Windows 7 and 8. It will see releases at least until the summer of 2022.<br>
<strong>LINUX:</strong> An AppImage is now offered. It uses the latest versions of Qt6, libtorrent, boost, openssl. It is created on Ubuntu 20.04 and it should work on any other similarly aged distro. It isn't well tested. Also Ubuntu 20.04 is dropped from the PPAs because it doesn't have the minimum required Qt5 version (5.15.2). The AppImage should cover any users left on that version.<br>
<strong>MACOS:</strong> Builds will be uploaded in the next days. This entry will be updated to contain relevant info, so check back here too.</p>
<p>v4.4.0 changelog:</p>
<ul>
<li>FEATURE: Support for v2 torrents along with libtorrent 2.0.x support (glassez, Chocobo1)</li>
<li>FEATURE: Support for Qt6 (glassez)</li>
<li>FEATURE: Expose libtorrent hashing_threads settings (Anton Bershanskiy)</li>
<li>FEATURE: Add &quot;Notification timeout&quot; option (kevtechxx)</li>
<li>FEATURE: Add <code>connection_speed</code> to advanced settings (Chocobo1)</li>
<li>FEATURE: Announce to all trackers if IP changed (#15001) (zhuangzi926)</li>
<li>FEATURE: Add tooltip for various columns (Chocobo1)</li>
<li>FEATURE: Add context menu to toggle content tab columns (#15164) (AbeniMatteo)</li>
<li>FEATURE: Add filter &quot;Checking&quot; to side panel (#15166) (AbeniMatteo)</li>
<li>FEATURE: Add &quot;Forced metadata downloading&quot; state (#15185) (AbeniMatteo)</li>
<li>FEATURE: Remember last viewed page in Options dialog (#15230) (Chocobo1)</li>
<li>FEATURE: Add tooltip to listening port spinbox (Chocobo1)</li>
<li>FEATURE: Add &quot;Skip hash check&quot; option for watched folders (glassez)</li>
<li>FEATURE: Add &quot;Show torrent options&quot; double-click action (glassez)</li>
<li>FEATURE: Allow setting temp folder per torrent/catergory (glassez)</li>
<li>FEATURE: Support folder based UI Themes (Prince Gupta)</li>
<li>BUGFIX: Save &quot;resume data&quot; once file priority is changed (glassez)</li>
<li>BUGFIX: Show priority menu at top level if there is no other in Add New Torrent dialog (FozzeY)</li>
<li>BUGFIX: Capitalize &quot;peer flags&quot; descriptions (Chocobo1)</li>
<li>BUGFIX: Reorder peer flags (Chocobo1)</li>
<li>BUGFIX: Show &quot;last activity&quot; value under all circumstances (Chocobo1)</li>
<li>BUGFIX: Elide text from the right for all columns' header (smigii)</li>
<li>BUGFIX: Fix startup with different profiles (jagannatharjun)</li>
<li>BUGFIX: Move a few torrent context menu actions into &quot;Torrent options&quot; dialog (thalieht)</li>
<li>BUGFIX: Allow deselecting radio buttons in &quot;Torrent options&quot; for mixed torrents (thalieht)</li>
<li>BUGFIX: Apply file priority changes correctly (a-sum-duma, Chocobo1)</li>
<li>BUGFIX: Use proper string for Korean language (OctopusET)</li>
<li>BUGFIX: Disable &quot;add peers&quot; menu items instead of hiding it (Chocobo1)</li>
<li>BUGFIX: Disable system tray icon menu when app is exiting (Chocobo1)</li>
<li>BUGFIX: Show GUI lock icon after system tray icon is initialized (Chocobo1)</li>
<li>BUGFIX: Apply selected layout to displayed torrent content in &quot;Add New Torrent&quot; dialog (glassez)</li>
<li>WEBUI: Add reverse proxy source IP resolution (#15047) (HiFiPhile)</li>
<li>WEBUI: Support navigating UI tables with arrow keys (Thomas Piccirello)</li>
<li>WEBUI: Support expanding/collapsing UI folders with arrow keys (Thomas Piccirello)</li>
<li>WEBUI: Support sorting UI tables via touch (#15205) (Tom Piccirello)</li>
<li>WEBUI: Add pieces progress bar to General tab (Jesse Smick)</li>
<li>WEBUI: Update authors page (Chocobo1)</li>
<li>WEBUI: Set icon sizes attribute (Daniel Aleksandersen)</li>
<li>WEBUI: Add meta application name (Daniel Aleksandersen)</li>
<li>WEBUI: Sort WebUI language selection values (Chocobo1)</li>
<li>WEBUI: Use correct URL scheme in user prompt when HTTPS is enabled (Chocobo1)</li>
<li>RSS: Stick Unread row to top in RSS feed list (Prince Gupta)</li>
<li>RSS: Correctly use fallback icons for RSS feed in GUI (jagannatharjun)</li>
<li>SEARCH: Add context menu for tabs in search widget (#14926) (Anton)</li>
<li>SEARCH: Add more download options to torrent search result right-click menu (a-sum-duma)</li>
<li>WINDOWS: Add windows-clang support (#15115) (Biswapriyo Nath)</li>
<li>WINDOWS: Update python installer URL for Windows (xavier2k6)</li>
<li>WINDOWS: NSIS: Update Simplified Chinese translation (Losiki)</li>
<li>LINUX: Prolong wait time for shutdown for qbittorrent-nox (Chocobo1)</li>
<li>LINUX: Install vector program icon (Chocobo1)</li>
<li>LINUX: Add detection for OpenBSD, Haiku in configure script (Chocobo1)</li>
<li>MACOS: Update Mac icons for Big Sur (17jiangz1)</li>
<li>EXPERIMENTAL: Setting to store/load fastresume/torrent files in an SQLite database (glassez)</li>
<li>OTHER: Many internal code refactorings and bug fixing by many people</li>
</ul>
<h3>Sunday October 31st 2021 - qBittorrent v4.3.9 and v4.4.0rc1 release</h3>
<p>qBittorrent v4.3.9 and v4.4.0rc1 were released.<br>
The next stable release will probably be 4.4.0.<br>
<strong>NOTE:</strong> Windows 10 users can also use the Qt6 build for 4.4.0rc1. This build is considered experimental compared to the Qt5 one.</p>
<p>v4.3.9 changelog:</p>
<ul>
<li>BUGFIX: Fix &quot;no action&quot; option on torrent double click (Jose M. Abuin)</li>
<li>BUGFIX: Fix broken behavior of &quot;priority by shown file order&quot; (Chocobo1)</li>
<li>WEBUI: Fix WebUI crash when tracker URL is invalid (Chocobo1)</li>
<li>WEBUI: Revert &quot;WebUI: group trackers by hostname&quot; (Chocobo1)</li>
<li>WINDOWS: Remove Windows Vista support from manifest (xavier2k6)</li>
<li>WINDOWS: NSIS: Update Korean, Indonesian and Traditional Chinese translation (JungHee Lee, Faisal Al-Munawar Fathur Rahman, SiderealArt)</li>
</ul>
<h3>Sunday August 29th 2021 - qBittorrent v4.3.8 and v4.4.0beta3 release</h3>
<p>qBittorrent v4.3.8 and v4.4.0beta3 were released.<br>
Also we moved our IRC channel to <code>irc.libera.chat</code>. The channel is <code>#qbittorrent</code>.</p>
<p>v4.3.8 changelog:</p>
<ul>
<li>BUGFIX: Delay processing of watched folders (#15282) (glassez)</li>
<li>BUGFIX: Use the same icon for selecting folders/files (Chocobo1)</li>
<li>BUGFIX: Use default upper limits for ddns entries (Chocobo1)</li>
<li>WEBUI: Expose SSRF mitigation (#15247) (Sylvain Finot)</li>
<li>WEBUI: Update webui libraries (Chocobo1)</li>
<li>WEBUI: Group trackers by hostname (#15264) (Mengyang Li)</li>
<li>WEBUI: Improve &quot;last activity&quot; calculation in WebAPI (#15339) (Chocobo1)</li>
<li>WINDOWS: NSIS: Add Polish translation (#15262) (Matthaiks)</li>
</ul>
<h3>Tuesday August 03rd 2021 - qBittorrent v4.3.7 and v4.4.0beta2 release</h3>
<p>qBittorrent v4.3.7 and v4.4.0beta2 were released.</p>
<p>v4.3.7 changelog:</p>
<ul>
<li>BUGFIX: Don't forget to start Watched folders timer (glassez)</li>
<li>BUGFIX: Don't close tags menu when toggling items (tgregerson)</li>
<li>BUGFIX: Don't overwrite tracker message (glassez)</li>
<li>BUGFIX: Bump file pool size (#14966) (An0n)</li>
<li>BUGFIX: Properly create &quot;clean path&quot; for watched folder (glassez)</li>
<li>WEBUI: Disconnect comment links (Daniel Aleksandersen)</li>
<li>WINDOWS: NSIS: Update Danish translation (scootergrisen)</li>
</ul>
<h3>Saturday June 26th 2021 - qBittorrent v4.3.6 and v4.4.0beta1 release</h3>
<p>qBittorrent v4.3.6 and v4.4.0beta1 were released.<br>
The v4.3.x releases will continue strictly with important fixes only and until the v4.4.0 is properly tested to be released as stable.
In the meantime there will be a few beta releases of v4.4.0 until it hits stable status. If you use the betas then keep checking back for new betas
because you won't get a program notification for them. Check once per week.<br>
The v4.4.0beta1 uses the libtorrent 2.0.x series. A more detailed changelog may be filled later.</p>
<p>v4.3.6 changelog:</p>
<ul>
<li>FEATURE: New languages: Mongolian, Persian, Thai</li>
<li>BUGFIX: Provide correct error description in &quot;upload mode&quot; (glassez)</li>
<li>BUGFIX: Allow adding torrents with relative save path (glassez)</li>
<li>BUGFIX: Fix main window turns blank after restoring from tray (#15031) (Chocobo1)</li>
<li>BUGFIX: Remove the lockfile on exit (#14997) (brvphoenix)</li>
<li>BUGFIX: Improve &quot;Watched folders&quot; feature (glassez)</li>
<li>BUGFIX: Keep sub-sorting order (#15074) (Dmitry Khlestkov)</li>
<li>BUGFIX: Properly add torrent with new tags (glassez)</li>
<li>WINDOWS: NSIS: Update Japanese, Turkish, Hungarian, Swedish translation (maboroshin, Burak Yavuz, xkrstudio, nonew-star)</li>
</ul>
<h3>Sunday May 2nd 2021 - qBittorrent v4.3.5 release</h3>
<p>qBittorrent v4.3.5 was released.<br>
This is the last release in the 4.3.x series. The next series will probably drop support for Ubuntu 20.04 (Focal Fossa) because the Qt5 version is too old now.</p>
<p>v4.3.5 changelog:</p>
<ul>
<li>BUGFIX: Move cursor to the end when autofilling URL/hash in &quot;Download from URLs&quot; dialog (Chocobo1)</li>
<li>BUGFIX: Sort invalid QDateTime values after valid values (Chocobo1)</li>
<li>BUGFIX: Fix tabChangesFocus attribute in &quot;Edit trackers&quot; dialog (Christoph Rackwitz)</li>
<li>BUGFIX: Update DynDNS register url (zhuangzi926)</li>
<li>BUGFIX: Handle &quot;not enough disk space&quot; error more graciously (glassez)</li>
<li>BUGFIX: Correctly draw progress background with stylesheet (jagannatharjun)</li>
<li>WEBUI: Fix magnet url from the search facility (Chocobo1)</li>
<li>WEBUI: Revise folder monitoring functions (Chocobo1)</li>
<li>WEBUI: Fix magnet url from the browser (brvphoenix)</li>
<li>WEBUI: Allow to specify file indexes in torrents/files API (glassez)</li>
<li>WINDOWS: NSIS: Allow more strings to translated (bovirus, Chocobo1)</li>
<li>WINDOWS: NSIS: Update Italian, German, Estonian, Russian, PortugueseBR translations (bovirus, Henry Water, PriitUring, Долматов Алексей, Felipe)</li>
<li>LINUX: Fix D-Bus Notification <code>desktop-entry</code> field (Chocobo1)</li>
<li>MACOS: Don't use executable name as CFBundleName value (Nick Korotysh)</li>
<li>OTHER: Lower Qt requirement to 5.11 (sledgehammer999)</li>
<li>OTHER: Clarify that the license is GPLv2+ (sledgehammer999)</li>
</ul>
<h3>Wednesday March 24th 2021 - qBittorrent v4.3.4.1 release</h3>
<p>qBittorrent v4.3.4.1 was released.<br>
<strong>WINDOWS:</strong> Windows Defender is being incredibly annoying lately marking us as unwanted software/malicious/trojan/virus. If you experience problems with the installer not starting or not finishing, check that Defender hasn't silently deleted it or the files it extracts. See <a href="https://github.com/qbittorrent/qBittorrent/issues/10045">this</a>, <a href="https://github.com/qbittorrent/qBittorrent/issues/14603">this</a> and <a href="https://github.com/qbittorrent/qBittorrent/issues/14601">this</a>.<br>
Read the v4.3.4 changelog too because this is a hotfix release.</p>
<p>v4.3.4.1 changelog:</p>
<ul>
<li>BUGFIX: Correctly draw progress bar (glassez)</li>
<li>WEBUI: Fix javascript code which broke the UI (Chocobo1)</li>
</ul>
<h3>Wednesday March 24th 2021 - qBittorrent v4.3.4 release</h3>
<p>qBittorrent v4.3.4 was released.<br>
<strong>WEBUI: It is accidentally broken in this release. Use v4.3.4.1 instead.</strong><br>
The sorting logic has been reworked. To get the old sorting order for the &quot;queue number&quot; column, first sort on the &quot;Completed On&quot; column and then sort on the &quot;#&quot;(queue number) column.<br>
Support for Ubuntu 18.04 (Bionic Beaver) has been dropped.</p>
<p>v4.3.4 changelog:</p>
<ul>
<li>FEATURE: Add ability to prioritize selected items by shown file order (Chocobo1)</li>
<li>FEATURE: Allow tab to escape the text box in &quot;Edit trackers&quot; dialog (Christoph Rackwitz)</li>
<li>FEATURE: Support sub-sorting in Transferlist (jagannatharjun)</li>
<li>FEATURE: Expose ToS setting from libtorrent (Chocobo1)</li>
<li>FEATURE: Improve tracker entries handling (glassez)</li>
<li>BUGFIX: Drop extension from generated content folder name (glassez)</li>
<li>BUGFIX: Change qBittorrent Updater window title (xavier2k6)</li>
<li>BUGFIX: Validate HTTPS Tracker Certificate by default (an0n666)</li>
<li>BUGFIX: Don't let &quot;program update&quot; dialog steal focus (Chocobo1)</li>
<li>BUGFIX: Disable expand on double click in TorrentContentTreeView (jagannatharjun)</li>
<li>BUGFIX: Add hyperlink to Transifex on translator list (Si Yong Kim)</li>
<li>BUGFIX: Enlarge &quot;speed limit&quot; icon slightly (Chocobo1)</li>
<li>BUGFIX: Don't prevent system sleep due to errored torrents (dyumin)</li>
<li>BUGFIX: Use stable sorting in transfer list (Chocobo1)</li>
<li>BUGFIX: Allow &quot;missing files&quot; torrents to save more resume data (glassez)</li>
<li>BUGFIX: Restart &quot;missing files&quot; torrents after changing location (glassez)</li>
<li>BUGFIX: Show proper string when torrent availability is not available (Chocobo1)</li>
<li>BUGFIX: Apply &quot;Hide zero/infinity values&quot; to &quot;Time Active&quot;, &quot;Down/Up Limit&quot; and ETA columns (Chocobo1)</li>
<li>BUGFIX: Fix potential out-of-bounds access (Chocobo1)</li>
<li>BUGFIX: Make SpeedPlotView averager time aware (jagannatharjun)</li>
<li>BUGFIX: Add a 3-Hour graph (jagannatharjun)</li>
<li>BUGFIX: Add an option to disable icons in menus (always disabled on MacOS) (Michał Kopeć)</li>
<li>BUGFIX: Improve detection of filename extension of audio/video files (Chocobo1)</li>
<li>BUGFIX: Various drawing improvements of progress bar (Chocobo1)</li>
<li>BUGFIX: Properly stop torrent creation if aborted (Chocobo1)</li>
<li>BUGFIX: Replace external program parameters in one step (Chocobo1)</li>
<li>BUGFIX: Improve &quot;save resume data&quot; handling (glassez)</li>
<li>BUGFIX: Fix bad IPv6 address format for outgoingInterfaces (treysis)</li>
<li>WEBUI: Properly decode strings (brvphoenix)</li>
<li>WEBUI: Accept &quot;share limits&quot; when adding torrent using WebAPI (glassez)</li>
<li>WEBUI: Add seeding time to the active time column (thalieht)</li>
<li>WEBUI: Fix incorrect seeding time string in General tab (thalieht)</li>
<li>WEBUI: Allow &gt;100 days in WebUI function &quot;friendlyDuration&quot; (thalieht)</li>
<li>WEBUI: Avoid decoding strings repeatedly (brvphoenix)</li>
<li>RSS: Add category button on AutomatedRSSDownloader on GUI (Si Yong Kim)</li>
<li>WINDOWS: NSIS: Update Czech translation (slrslr)</li>
<li>WINDOWS: NSIS: Update Portuguese BR translation (Alex)</li>
<li>WINDOWS: NSIS: Add Estonian translation (PriitUring)</li>
<li>WINDOWS: Allow change-case-only file renaming (glassez)</li>
<li>LINUX: Systemd: wait for mounting of local filesystems (Juraj Oršulić)</li>
<li>OTHER: Raise minimum libtorrent version to 1.2.12 (glassez)</li>
<li>OTHER: Raise minimum Qt version to 5.12 (glassez)</li>
</ul>
<h3>Thursday January 19th 2021 - qBittorrent v4.3.3 release</h3>
<p>qBittorrent v4.3.3 was released.<br>
Support for macOS 10.13 (High Sierra) was dropped because Xcode doesn't support C++17 for that version.<br>
For the same reason it is highly likely that support for Ubuntu 18.04 (Bionic Beaver) will be dropped in the next releases.</p>
<p>v4.3.3 changelog:</p>
<ul>
<li>FEATURE: New languages: Azerbaijani, Estonian</li>
<li>BUGFIX: Unify global speed dialogs for normal/alternative speeds (thalieht)</li>
<li>BUGFIX: Increase maximum global speed limits ~2 GiB/s (thalieht)</li>
<li>BUGFIX: Save fastresume when setting torrent speed limits (thalieht)</li>
<li>BUGFIX: Group several torrent options into one dialog (thalieht)</li>
<li>BUGFIX: Capitalize locale names (Chocobo1)</li>
<li>BUGFIX: Improve content file/folder names handling (glassez)</li>
<li>BUGFIX: Drop notification about move storage finished or failed (glassez)</li>
<li>BUGFIX: Reload &quot;missing files&quot; torrent instead of re-checking (glassez)</li>
<li>BUGFIX: Remember dialog sizes (Chocobo1)</li>
<li>BUGFIX: Improve detection of file extension string (Chocobo1)</li>
<li>WEBUI: Don't call non-existent elements (glassez)</li>
<li>WEBUI: Update &quot;Keep top-level folder&quot; in WebUI options (thalieht)</li>
<li>MACOS: QMake: Raise minimal macOS target version to 10.14 (glassez)</li>
<li>LINUX: Use legacy 'data' directory only as a fallback (lbilli)</li>
<li>OTHER: Bump project requirement to C++17 (Chocobo1)</li>
</ul>
<h3>Sunday December 27th 2020 - qBittorrent v4.3.2 release</h3>
<p>qBittorrent v4.3.2 was released.<br></p>
<p>v4.3.2 changelog:</p>
<ul>
<li>FEATURE: Allow to add root folder to torrent content (glassez)</li>
<li>FEATURE: &quot;HTTPS tracker validation&quot; option is available on all platforms with latest libtorrent (Chocobo1)</li>
<li>FEATURE: Option for supporting internationalized domain names (IDNs) (Chocobo1)</li>
<li>BUGFIX: Fix broken sorting on some columns (Chocobo1)</li>
<li>BUGFIX: Fix availability per file value (Chocobo1)</li>
<li>BUGFIX: Fix status of torrents without metadata (sledgehammer999)</li>
<li>BUGFIX: Don't try to remove folders for a torrent without metadata (sledgehammer999)</li>
<li>BUGFIX: Lift upper limit of &quot;Max concurrent HTTP announces&quot; option (Chocobo1)</li>
<li>BUGFIX: Add links to libtorrent documentation (Chocobo1)</li>
<li>BUGFIX: Move &quot;embedded tracker&quot; options to qbt section (Chocobo1)</li>
<li>BUGFIX: Properly handle &quot;Append extension&quot; option changing (glassez)</li>
<li>BUGFIX: Correctly save paused torrent state (glassez)</li>
<li>BUGFIX: Fix bug of &quot;move storage job&quot; can be performed multiple times (glassez)</li>
<li>WEBUI: Add ability to use 'shift+delete' to delete torrents (Chocobo1)</li>
<li>WEBUI: Allow to attach tags while adding torrents (Jesse Chan)</li>
<li>WEBUI: Bump version to 2.6.2 (Jesse Chan)</li>
<li>WEBUI: Remove unnecessary restriction on input length (Chocobo1)</li>
<li>WINDOWS: NSIS: Update Russian translation (Andrei Stepanov)</li>
<li>WINDOWS:  NSIS: Update Italian translation (Alessandro Simonelli)</li>
<li>OTHER: Drop support for building with libtorrent &lt; 1.2.11 (Vladimir Golovnev)</li>
</ul>
<h3>Wednesday November 25th 2020 - qBittorrent v4.3.1 release</h3>
<p>qBittorrent v4.3.1 was released.<br>
Also take note of the previous <code>news</code> entry regarding updated donation info.</p>
<p>v4.3.1 changelog:</p>
<ul>
<li>FEATURE: Allow progress bar styling from custom themes (jagannatharjun)</li>
<li>FEATURE: Allow adding torrents using &quot;Paste&quot; key sequence (Chocobo1)</li>
<li>FEATURE: Add Latgalian translation (sledgehammer999)</li>
<li>BUGFIX: Prevent resume data to be saved for removed torrent (glassez)</li>
<li>BUGFIX: Clarify connection protocol choice label (FranciscoPombal)</li>
<li>BUGFIX: Fix crash when clicked outside the table of torrent content view (jagannatharjun)</li>
<li>BUGFIX: Don't resume &quot;paused&quot; torrents when put into &quot;checking&quot; state by libtorrent (glassez)</li>
<li>BUGFIX: Fix torrent state calculation (glassez)</li>
<li>BUGFIX: Align integer data to right in torrent content view (jagannatharjun)</li>
<li>WEBUI: Place WebUI RSS description in sandboxed iframe (Sepro)</li>
<li>WEBUI: Avoid settings being reset via WebAPI (Chocobo1)</li>
<li>WEBUI: Fix toggling advanced option in WebUI (thalieht)</li>
<li>WEBUI: Expose contentPath in WebAPI torrents/info (FranciscoPombal)</li>
<li>WEBUI: Fix the issue that IPv6 address can't be banned (brvphoenix)</li>
<li>RSS: Fix confusion in date format description (Thomas De Rocker)</li>
<li>WINDOWS: Update dutch.nsi (Thomas De Rocker)</li>
<li>LINUX: Update .desktop file translations (sledgehammer999)</li>
</ul>
<h3>Monday November 16th 2020 - Donation info updates</h3>
<p>The donation info has been updated to better reflect the expectations of donating to the project. Donations are made as a &quot;Thank You&quot; and with no expectation of any kind of obligation by us, eg having to implement feature X or Y.<br>
The development of qbittorrent is done by volunteers and we don't employ programmers or other people to work on the project. There are a few lead programmers that coordinate most things on github and also contribute code.<br>
Donations are appreciated as a &quot;Thank You&quot;. You can choose to help with the server costs (website, forum, domain) and/or donate to lead programmers.</p>
<p>Because the development is volunteer driven, we can't set very specific goals. At the end of the day a volunteer will fix/implement whatever pleases him/her. We can't dictate to volunteers to work on specific things if they don't want to. The same applies to lead programmers. We are volunteers too.<br>
However, if you want specific features implemented or issues solved you may look at our <a href="https://www.bountysource.com/teams/qbittorrent/issues">Bountysource page</a>. There you can post a monetary bounty for an issue/feature and <strong>maybe</strong> someone is incentivized enough to fix/implement it.</p>
<p>For details, see <a href="/donate">donation page</a>.</p>
<p>PS: The old cryptocoin addresses have been retired. Please don't continue sending funds there. Accumulated funds will be used as reserves mostly for covering server costs in the future.</p>
<h3>Thursday October 22nd 2020 - qBittorrent v4.3.0.1 release</h3>
<p>qBittorrent v4.3.0.1 was released.<br>
This is a minor release to address crashes on Windows related to torrents with URL seeds (<code>HTTP Sources</code> in the qbittorrent window). These crashes were exposed due to boost 1.74. Boost 1.73 doesn't have this problem. However, libtorrent also fixed the issue on their end so the Windows installers use the newer libtorrent code.<br>
The rest of the release is almost the same as v4.3.0 (see changelog). Since other platforms weren't affected only Windows builds will be made available for this version.<br></p>
<p>v4.3.0.1 changelog:</p>
<ul>
<li>WINDOWS: NSIS: Update Italian translation (bovirus)</li>
</ul>
<h3>Sunday October 18th 2020 - qBittorrent v4.3.0 release</h3>
<p>qBittorrent v4.3.0 was released.<br>
This is a major version release due to the high number of accumulated changes and due to the long time since the last release.<br>
Some notes:</p>
<ul>
<li>Theming support has been enhanced but previous theme bundles will not work properly with this release. Please contact the theme provider for a fix. The new format is described <a href="https://github.com/qbittorrent/qBittorrent/wiki/How-to-use-custom-UI-themes">here</a>.</li>
<li>If you want faster tracker announce rate or are having a slower client exit(compared to 4.2.x) then you may try increasing the <code>Max concurrent HTTP announce</code> limit from advanced settings.</li>
<li>The latest version of libtorrent used contains many important fixes compared to the last one, including memory leaks and speed issues due to wrong caching logic on Windows.</li>
<li>Qt 5.15.1 is used which offers far better HiDPI support. However, the torrent context menu will close after each tag selection.</li>
<li>Brave users can download experimental builds from &quot;Actions CI&quot; on github.</li>
</ul>
<p>v4.3.0 changelog:</p>
<ul>
<li>FEATURE: Many UI elements colors are themeable now (jagannatharjun)</li>
<li>FEATURE: Allow changing GUI icons from theme bundles (jagannatharjun)</li>
<li>FEATURE: Notify user when torrent moving finished (glassez)</li>
<li>FEATURE: Shortcut CTRL + I opens Statistics window (LoopsGod</li>
<li>FEATURE: Add RSS functionality in Web UI (Sepro)</li>
<li>FEATURE: Drop &quot;.unwanted folder&quot; feature (glassez)</li>
<li>FEATURE: Expose libtorrent peer_turnover, max_concurrent_http_announces, no_connect_privileged_ports settings (Sophist, an0n666, NotTsunami)</li>
<li>BUGFIX: Fix typo in Options dialog (Andrei Stepanov)</li>
<li>BUGFIX: Remove &quot;requires restart&quot; from network interface settings (an0n666)</li>
<li>BUGFIX: Rename &quot;Create subfolder&quot; to &quot;Keep top-level folder&quot; (thalieht)</li>
<li>BUGFIX: Show tooltip for some properties in transfer list (Nick Korotysh)</li>
<li>BUGFIX: Fix calculation of torrent current state (glassez)</li>
<li>BUGFIX: Improve detecting completed files when adding, rechecking or moving a torrent (glassez)</li>
<li>BUGFIX: Fixed broken announce logic in embedded tracker causing failures in some cases (FranciscoPombal)</li>
<li>BUGFIX: Disable checkbox if torrent doesn't have root folder (thalieht)</li>
<li>BUGFIX: Update country flag icons with upstream (Chocobo1)</li>
<li>BUGFIX: Private torrent: If tracker entry is edited clear old peer list. Also don't allow user to manually add peers. (an0n666)</li>
<li>BUGFIX: Fix large strings not visible in log widget (jagannatharjun)</li>
<li>BUGFIX: Disable edit action in Peer list widget (Chocobo1)</li>
<li>BUGFIX: Add a scroll area to torrent creator dialog (Ernesto Castellotti)</li>
<li>BUGFIX: Content tab: Open double-clicked folder regardless on which column the click happens (Chocobo1)</li>
<li>BUGFIX: &quot;Open containing folder&quot; on a folder now opens it in its parent folder (Chocobo1)</li>
<li>BUGFIX: Fix GeoDB download in systems with non-C locales (FranciscoPombal)</li>
<li>BUGFIX: Fix peer blocked message (FranciscoPombal)</li>
<li>BUGFIX: Make more robust the banning of selected peers from the list (NotTsunami)</li>
<li>BUGFIX: Use toned green color for downloading pieces in Pieces bar (jagannatharjun)</li>
<li>BUGFIX: Correctly fill whole width of speed graph (jagannatharjun)</li>
<li>BUGFIX: Fix impossible speed in speed graph (jagannatharjun)</li>
<li>WEBUI: Hide additional search filters on small screens (Thomas Piccirello)</li>
<li>WEBUI: Shrink search bar on small screens (Thomas Piccirello)</li>
<li>WEBUI: Fix search categories only working in English (Thomas Piccirello)</li>
<li>WEBUI: Add Trackers section to sidebar (Thomas Piccirello)</li>
<li>WEBUI: Fix Enter button behavior in textarea (Tom Piccirello)</li>
<li>WEBUI: Fix wrong file renaming selection range (MR)</li>
<li>WEBUI: Preselect &quot;Default save path&quot; in watched folders (thalieht)</li>
<li>WEBUI: Fix banning peers (brvphoenix)</li>
<li>WEBUI: Fix seeding time checkbox placement (Chocobo1)</li>
<li>WEBUI: Bump Web API version (Thomas Piccirello)</li>
<li>RSS: Fix renaming RSS autodownload rule (glassez)</li>
<li>RSS: Fix RSS article is not marked as &quot;read&quot; when torrent is downloaded (glassez)</li>
<li>SEARCH: Update minimum Python version to 3.5.0 (ngosang)</li>
<li>SEARCH: Make middle-click close search tabs (Will Da Silva)</li>
<li>WINDOWS: NSIS: Update Dutch translation (Thomas De Rocker)</li>
<li>WINDOWS: NSIS: Change the installers uninstallation question to clear confusion (an0n666)</li>
<li>LINUX: Fix typo in systemd service file (Shane Allgeier)</li>
<li>LINUX: Don't use HTML in tray tooltip (thalieht)</li>
<li>LINUX: Don't create 'data' subdirectory in XDG_DATA_HOME (lbilli)</li>
<li>LINUX/MACOS: Add HTTPS tracker certificate validation option (NotTsunami)</li>
<li>OTHER: Many CMake improvements (FranciscoPombal)</li>
<li>OTHER: Support for libtorrent 1.1.x is dropped (Chocobo1)</li>
<li>OTHER: Many code cleanups and improvements (FranciscoPombal, Chocobo1, glassez)</li>
</ul>
<h3>Saturday April 25th 2020 - qBittorrent v4.2.5 release</h3>
<p>qBittorrent v4.2.5 was released.<br>
It contains fixes for two crashes.<br>
<strong>ATTENTION WINDOWS USERS:</strong> There's a &quot;qBittorrent&quot; app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.5 changelog:</p>
<ul>
<li>BUGFIX: Fix crash when torrent is deleted on limit reached (glassez)</li>
<li>BUGFIX: Register datatype properly (Chocobo1)</li>
<li>WEBUI: Add ability to send custom HTTP headers (Chocobo1)</li>
<li>WEBUI: Expand RSS related API (Sepro)</li>
<li>WINDOWS: Installer: Update german translation (schnurlos)</li>
</ul>
<h3>Wednesday April 22nd 2020 - qBittorrent v4.2.4 release</h3>
<p>qBittorrent v4.2.4 was released.<br>
It contains various qbittorrent and libtorrent networking fixes. Now most issues with VPNs and SOCKS5 proxies should be fixed.<br>
<strong>ATTENTION WINDOWS USERS:</strong> There's a &quot;qBittorrent&quot; app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.4 changelog:</p>
<ul>
<li>BUGFIX: Fix sub-sorting of Transfer list (glassez)</li>
<li>BUGFIX: Fix wrong logic that disables &quot;prevent sleeping&quot; timer (Chocobo1)</li>
<li>BUGFIX: Set disk cache size for older libtorrent versions (NotTsunami)</li>
<li>BUGFIX: Sort locale language list (Chocobo1)</li>
<li>BUGFIX: Remove white outline around mascot.png (adem)</li>
<li>BUGFIX: Various fixes in configuring the chosen network interface and not leaking the IP (Raif Atef, an0n666)</li>
<li>BUGFIX: Save &quot;resume data&quot; when torrent storage is moved (glassez)</li>
<li>BUGFIX: Avoid holding encoded resume data in memory (Chocobo1)</li>
<li>BUGFIX: Fix date format for &quot;Last seen complete&quot; (Chocobo1)</li>
<li>BUGFIX: Remove deprecated strict super seeding mode from advanced settings (an0n666)</li>
<li>BUGFIX: Change default stop_tracker_timeout settings (an0n666)</li>
<li>BUGFIX: Convert the Log widget to use custom View/Model (jagannatharjun)</li>
<li>BUGFIX: Change default upload slot choking limits (an0n666)</li>
<li>BUGFIX: Don't uncheck Authentication checkbox when changing proxy type (thalieht)</li>
<li>BUGFIX: Reduce ambiguity for selecting tray icons (Chocobo1)</li>
<li>WEBUI: Fix unable to add multiple peers in WebUI (Sepro)</li>
<li>WEBUI: Fix UPnP lease duration get/set (NotTsunami)</li>
<li>SEARCH: Detect python3 executable on Windows (József Sallai)</li>
</ul>
<h3>Wednesday April 1st 2020 - qBittorrent v4.2.3 release</h3>
<p>qBittorrent v4.2.3 was released.<br>
It contains various fixes from v4.2.2 regarding scaling on HiDPI monitors, some VPN issues and UNC path handling. Torrents with broken UNC paths will be fixed when you run this release.<br>
On Windows, Qt 5.13.2 is used because of a regression regarding VPNs that affects RSS and Search functionality. Due to this, the scaling behavior on HiDPI monitors will be the same as in v4.2.1 too.<br>
<strong>ATTENTION WINDOWS USERS:</strong> There's a &quot;qBittorrent&quot; app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.3 changelog:</p>
<ul>
<li>FEATURE: Add logging for SOCKS5 proxy errors (Chocobo1)</li>
<li>FEATURE: Add UPnP lease duration advanced option (NotTsunami)</li>
<li>BUGFIX: Allow to translate error messages (Chocobo1)</li>
<li>BUGFIX: Don't round scaling factor (Nick Korotysh)</li>
<li>BUGFIX: Save log file in UTF-8 encoding (Chocobo1)</li>
<li>BUGFIX: Avoid log file excessive flushing (Chocobo1)</li>
<li>BUGFIX: Fix regression when fastresume contains network path (Tester798)</li>
<li>BUGFIX: Fix broken UNC paths in fastresumes on Windows (sledgehammer999)</li>
<li>BUGFIX: Prevent multiple instances for the same app config (glassez)</li>
<li>BUGFIX: Fix unexpected torrent resume after app restart with libtorrent 1.1.x (glassez)</li>
<li>WEBUI: Add alt and title tags for WebUI footer (LameLemon)</li>
<li>WINDOWS: Installer: Update Finnish translation (Roope Jukkara)</li>
<li>WINDOWS: Installer: Update Japanese translation (maboroshin)</li>
<li>WINDOWS: Installer: Update Turkish translation (Burak Yavuz)</li>
<li>WINDOWS: Installer: Update Russian translation (Andrei Stepanov)</li>
</ul>
<h3>Tuesday March 24th 2020 - qBittorrent v4.2.2 release</h3>
<p>qBittorrent v4.2.2 was released.<br>
<strong>ATTENTION WINDOWS USERS:</strong> There's a &quot;qBittorrent&quot; app on the Windows Store which costs money. It isn't an official release nor it is coming from us. The person publicizing it doesn't have permission to use the qBittorrent name/logo.<br>
v4.2.2 changelog:</p>
<ul>
<li>FEATURE: Allow transfer list text color changes through QSS (Prince Gupta)</li>
<li>FEATURE: Option to show console when external program is run (sledgehammer999)</li>
<li>FEATURE: Rename Country column to &quot;Country / Region&quot; (Thomas Piccirello)</li>
<li>FEATURE: Change the defaults of some settings (FranciscoPombal)</li>
<li>FEATURE: Refactored Transfer List code to allow theming. As a sideffect the row height has more padding. (glassez)</li>
<li>FEATURE: Allow double-click in preview dialog (thalieht)</li>
<li>FEATURE: Expose stop_tracker_timeout in advanced settings (an0n666)</li>
<li>FEATURE: Add piece_extent_affinity to AdvancedSettings (FranciscoPombal)</li>
<li>FEATURE: Reorganize UI theme selection (Prince Gupta)</li>
<li>FEATURE: Show any multiple connections from the same IP in peer list (thalieht)</li>
<li>FEATURE: Add stalled filters to GUI and Web API/UI (FranciscoPombal)</li>
<li>FEATURE: Use IP geolocation database by DB-IP instead of MaxMind (sledgehammer999)</li>
<li>FEATURE: Allow to save downloaded metadata as torrent file (glassez)</li>
<li>FEATURE: Allow single app instance per configuration (glassez)</li>
<li>PERFORMANCE: Move multiple torrents one by one (glassez)</li>
<li>BUGFIX: Disable Torrent Queue by default for new users (an0n666)</li>
<li>BUGFIX: Update free disk space label on Category change in Auto Mode (Medvedishce)</li>
<li>BUGFIX: Save resume data after recheck (glassez)</li>
<li>BUGFIX: Tracker is errored only if all local endpoints fail (sledgehammer999)</li>
<li>BUGFIX: Change placement of stop tracker timeout setting (An0n)</li>
<li>BUGFIX: Redesign torrent startup handling (glassez)</li>
<li>BUGFIX: Show &quot;∞&quot; instead of &quot; -1&quot; in Preferences (Sakib-Abrar)</li>
<li>BUGFIX: Improve code efficiency for reverse resolution of peers (Chocobo1)</li>
<li>BUGFIX: Handle HTTP redirection to magnet URI (glassez)</li>
<li>BUGFIX: Various fixes for portable mode (Tester798)</li>
<li>BUGFIX: Include resume folder path in exception message (Chocobo1)</li>
<li>BUGFIX: Change placeholder text in torrent list's filter (djt3)</li>
<li>BUGFIX: Improvements in the embedded tracker to be more spec compliant (FranciscoPombal)</li>
<li>BUGFIX: Improve the options tooltips (NotTsunami)</li>
<li>BUGFIX: Check if file exists in seed mode (an0n666)</li>
<li>BUGFIX: Delegate GUI scaling work to Qt (Nick Korotysh)</li>
<li>BUGFIX: Fix crash when renaming torrent contents (Chocobo1)</li>
<li>BUGFIX: Fix total connected peers count calculation (FranciscoPombal)</li>
<li>BUGFIX: Allow other keypresses in LogListWidget (NotTsunami)</li>
<li>BUGFIX: Disable Auto TMM when not using default savepath from monitored folder (thalieht)</li>
<li>WEBUI: Fix first row renaming in files tab (Denis)</li>
<li>WEBUI: Use SVG image for WebUI favicon (Nick Korotysh)</li>
<li>WEBUI: Inherit text color for filter list elements (Nick Korotysh)</li>
<li>WEBUI: Expose WebUI ban counter to users (Chocobo1)</li>
<li>WEBUI: Expose WebUI ban duration to users (Chocobo1)</li>
<li>WEBUI: Implement &quot;Secure&quot; flag for session cookie (FranciscoPombal)</li>
<li>WEBUI: Remove unused/deprecated option (FranciscoPombal)</li>
<li>WEBUI: Prevent excessive sync requests (FranciscoPombal)</li>
<li>WEBUI: Fix populating statistics window (FranciscoPombal)</li>
<li>WEBUI: Fix matching uncategorized torrents (FranciscoPombal)</li>
<li>WEBUI: Always allow whitespace in category names (FranciscoPombal)</li>
<li>SEARCH: Bump python version for new installation (Chocobo1)</li>
<li>SEARCH: Fix missing string (Chocobo1)</li>
<li>SEARCH: Drop python2 support (Chocobo1)</li>
<li>WINDOWS: Installer: Option to start qBittorrent on Windows start up (An0n)</li>
<li>WINDOWS: Installer: Improve Czech translation (slrslr)</li>
<li>WINDOWS: Installer: Update French translation (zywo)</li>
<li>WINDOWS: Installer: Update German translation (schnurlos)</li>
<li>WINDOWS: Installer: Update Japanese translation (maboroshin)</li>
<li>WINDOWS: Path length limitation is removed on Windows 10 1607 onwards (an0n666)</li>
</ul>
<h3>Wednesday December 18th 2019 - qBittorrent v4.2.1 release</h3>
<p>qBittorrent v4.2.1 was released.<br>
Due to libtorrent fixes, UDP through proxies should work again. In some cases it also caused crashes.<br>
<strong>ATTENTION:</strong> There's a slight change in the way network interfaces are configured. If you have a specific network interface/local address set in the Advanced Settings, go and make sure that your settings have stayed the same. The extra setting for <code>Listen on IPv6 address</code> has been removed.<br>
v4.2.1 changelog:</p>
<ul>
<li>FEATURE: Enable portable mode if &quot;profile&quot; directory exists (Tester798)</li>
<li>FEATURE: Enable &quot;Apply rate limit to peers on LAN&quot; option by default (Chocobo1)</li>
<li>BUGFIX: Sync translations from Transifex and run lupdate (sledgehammer999)</li>
<li>BUGFIX: Don't unnecessarily delete OS files in folders (sledgehammer999)</li>
<li>BUGFIX: Use the incomplete folder where appropriate (sledgehammer999)</li>
<li>BUGFIX: Align Properties tab bar correctly on window resize (Prince Gupta)</li>
<li>BUGFIX: Rework the listening IP/interface selection code (sledgehammer999)</li>
<li>BUGFIX: Fix inconsistent icon for deleting torrent (Chocobo1)</li>
<li>BUGFIX: Show torrent error message in transfer list (Chocobo1)</li>
<li>BUGFIX: Fix stuck in wrong torrent state (Chocobo1)</li>
<li>BUGFIX: Expand single-item folders in torrent content (warren)</li>
<li>WEBUI: Bump Web API version (sledgehammer999)</li>
<li>WEBUI: Add ability to rename torrent files from the WebUI (Thomas Piccirello)</li>
<li>WEBUI: Mention lack of HTTPS in WebUI magnet link warning (nl6720)</li>
<li>WEBUI: Fix HTML elements size in search tab (Chocobo1)</li>
<li>SEARCH: Fix incorrect translation displayed after language change (Chocobo1)</li>
<li>SEARCH: Fix missing translations in search plugins dialog (Chocobo1)</li>
<li>WINDOWS: Update russian translation of the installer (Andrei Stepanov)</li>
</ul>
<h3>Tuesday December 3rd 2019 - qBittorrent v4.2.0 release</h3>
<p>qBittorrent v4.2.0 was released.<br>
There were no significant user facing changes since the previous RC release. The full v4.2.0 changelog follows.<br>
<strong>ATTENTION:</strong> This release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the previous versions. If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br></p>
<ul>
<li>FEATURE: Libtorrent 1.2.x series are supported now (glassez)</li>
<li>FEATURE: Add OpenSSL version to GUI and stackdump (Chocobo1)</li>
<li>FEATURE: Add zlib version to GUI &amp; stackdump (silverqx)</li>
<li>FEATURE: Use PBKDF2 for storing GUI lock password. You will need to set your password again. (Chocobo1)</li>
<li>FEATURE: Rename &quot;#&quot; column to &quot;Tier&quot; in the tracker list (thalieht)</li>
<li>FEATURE: Allow setting larger checking memory usage in GUI (airium)</li>
<li>FEATURE: Converted remaining icons to svg (Bert Verhelst)</li>
<li>FEATURE: Replace CheckBox with Arrow in the side panel (Prince Gupta)</li>
<li>FEATURE: Log performance alerts from libtorrent (Chocobo1)</li>
<li>FEATURE: Use native folder icon in content tree (Chocobo1)</li>
<li>FEATURE: Move copy actions under a submenu (Chocobo1)</li>
<li>FEATURE: Add &quot;Socket backlog size&quot; option (Chocobo1)</li>
<li>FEATURE: Add &quot;File pool size&quot; option (Chocobo1)</li>
<li>FEATURE: Allow styling with QSS stylesheets (Prince Gupta)</li>
<li>FEATURE: Add &quot;Tracker entries&quot; dialog (Chocobo1)</li>
<li>FEATURE: Add availability column (Chocobo1)</li>
<li>FEATURE: Use a randomized port number for the first run (Chocobo1)</li>
<li>FEATURE: Enable Super Seeding mode once ratio/time limit is reached (thalieht)</li>
<li>FEATURE: Improve embedded tracker. Now it conforms to BEPs more closely. (Chocobo1)</li>
<li>FEATURE: Add option to align file to piece boundary when creating new torrent (Chocobo1)</li>
<li>FEATURE: Ability to open file or trigger torrect action via keypad Enter (Chocobo1)</li>
<li>FEATURE: Add &quot;Remove torrent and its files&quot; option to share ratio limiting (thalieht)</li>
<li>FEATURE: Allow to select multiple entries in &quot;banned IP&quot; dialog (Chocobo1)</li>
<li>FEATURE: Reallow to pause checking torrents (thalieht)</li>
<li>FEATURE: Reallow to force recheck torrents that aren't fully started (thalieht)</li>
<li>FEATURE: Add &quot;Preview file&quot; double-click action (warren)</li>
<li>BUGFIX: Avoid performance penalty when logger is full (Chocobo1)</li>
<li>BUGFIX: Remove the max half-open connections option (thalieht)</li>
<li>BUGFIX: Center align the section labels in advanced settings (thalieht)</li>
<li>BUGFIX: Add documentation links to some advanced settings (thalieht)</li>
<li>BUGFIX: Improve DownloadManager code (glassez)</li>
<li>BUGFIX: Limit DownloadHandler max redirection to 20 (Chocobo1)</li>
<li>BUGFIX: Log DownloadManager SSL errors (Chocobo1)</li>
<li>BUGFIX: Force recheck multiple torrents one by one (glassez)</li>
<li>BUGFIX: Close context menu when content model is reset (glassez)</li>
<li>BUGFIX: Improve Properties widget (glassez)</li>
<li>BUGFIX: Prevent flickering preview dialog (silver)</li>
<li>BUGFIX: Rename &quot;Prefer encryption&quot; to &quot;Allow encryption&quot; (thalieht)</li>
<li>BUGFIX: Fix search icon placement when using RTL languages (Chocobo1)</li>
<li>BUGFIX: Avoid combo boxes extending to the right in Options dialog (Chocobo1)</li>
<li>BUGFIX: Fix speed limit not applying to IPv6 peers (Chocobo1)</li>
<li>BUGFIX: Log failed file rename errors (Chocobo1)</li>
<li>BUGFIX: Fix wrong &quot;Time Active&quot; value displayed (Chocobo1)</li>
<li>BUGFIX: Rename priority to queue in the context of torrents (thalieht)</li>
<li>BUGFIX: Update remaining size of ignored files to 0 (Thomas Piccirello)</li>
<li>BUGFIX: Move &quot;Check for program updates&quot; checkbox to the Behavior settings (Chocobo1)</li>
<li>BUGFIX: Improve error messages for URL seed (Chocobo1)</li>
<li>BUGFIX: Rename share ratio limiting options (thalieht)</li>
<li>BUGFIX: Fix country name misspelling (horgan)</li>
<li>PERFORMANCE: Faster/efficient way of handling updates in the Transfer list (Chocobo1)</li>
<li>WEBUI: Bump Web API version</li>
<li>WEBUI: Use PBKDF2 for storing WebUI password. You will need to set your password again. (Chocobo1)</li>
<li>WEBUI: Use Javascript strict mode (Chocobo1)</li>
<li>WEBUI: Remove autocorrect/autocapitalise from filepaths on WebUI (AceLewis)</li>
<li>WEBUI: Display warning when Javascript is disabled (Chocobo1)</li>
<li>WEBUI: Remove mootools lib from login page (Chocobo1)</li>
<li>WEBUI: Prevent login credential appearing in URL (Chocobo1)</li>
<li>WEBUI: Load WebUI certificate &amp; key from file path (Chocobo1)</li>
<li>WEBUI: Add migration code for WebUI https related change (Chocobo1)</li>
<li>WEBUI: Fix wrong element id being used (Thomas Piccirello)</li>
<li>WEBUI: Fix direction of Web UI sorted column icon (Thomas Piccirello)</li>
<li>WEBUI: Match WebUI About page to GUI (Thomas Piccirello)</li>
<li>WEBUI: Simplify tab logic (Thomas Piccirello)</li>
<li>WEBUI: Separate URL components before percent-decoding (glassez)</li>
<li>WEBUI: Capitalize event name (Thomas Piccirello)</li>
<li>WEBUI: Fix bug where input wouldn't always be focused (Thomas Piccirello)</li>
<li>WEBUI: Add Web UI support for escape key (Thomas Piccirello)</li>
<li>WEBUI: Fix broken image link (Tom Piccirello)</li>
<li>WEBUI: Include application version in css/js url for cache busting (Thomas Piccirello)</li>
<li>WEBUI: Update WebUI img to use svg images (Chocobo1)</li>
<li>WEBUI: Fix speed limit icon too large on WebUI (Chocobo1)</li>
<li>WEBUI: Fix misaligned icons in STATUS list in GUI (Chocobo1)</li>
<li>WEBUI: Drop legacy WebAPI support (glassez)</li>
<li>WEBUI: Allow WebUI Content tab to be sorted (Thomas Piccirello)</li>
<li>WEBUI: Encode torrent name before passing in URL (Thomas Piccirello)</li>
<li>WEBUI: Move WebUI Peers code to separate file (Thomas Piccirello)</li>
<li>WEBUI: Prevent WebUI tables from being highlighted (Thomas Piccirello)</li>
<li>WEBUI: Allow WebUI Trackers table to be manipulated (Thomas Piccirello)</li>
<li>WEBUI: Fix only the first newline char is replaced (Chocobo1)</li>
<li>WEBUI: Fix missing semicolon in WebUI (Chocobo1)</li>
<li>WEBUI: Add autocomplete attribute to WebUI (Chocobo1)</li>
<li>WEBUI: Always use index.html as default page (CzBiX)</li>
<li>WEBUI: Set title attribute for all WebUI table cells (Thomas Piccirello)</li>
<li>WEBUI: Align WebUI login button to the right (Chocobo1)</li>
<li>WEBUI: Use force refresh on WebUI logout (Chocobo1)</li>
<li>WEBUI: Use a random number for WebUI cache busting (Chocobo1)</li>
<li>WEBUI: Register protocol handler in WebUI for magnet links (Cory)</li>
<li>WEBUI: Add WebAPI session timeout settings (Chocobo1)</li>
<li>WEBUI: Fix encoding of special characters (Tom Piccirello)</li>
<li>WEBUI: Avoid word wrap in webui footer (airium)</li>
<li>WEBUI: Add advanced options in WebUI (Zhaoyu Gan)</li>
<li>WEBUI: Move WebUI copy actions under a submenu (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI support for triggering context menus on mobile (Thomas Piccirello)</li>
<li>WEBUI: Implement tag management for WebUI (Vasiliy Halimonchuk)</li>
<li>WEBUI: Fix WebUI removing parameters from magnet links (Thomas Piccirello)</li>
<li>WEBUI: Enable by default the search tab (Thomas Piccirello)</li>
<li>WEBUI: Add context menu to Web UI search table (Thomas Piccirello)</li>
<li>WEBUI: Display files hierarchically in Web UI content tab (Thomas Piccirello)</li>
<li>WEBUI: Add ability to add and ban a peer from the Web UI (Thomas Piccirello)</li>
<li>WEBUI: Increase WebUI window heights (Thomas Piccirello)</li>
<li>WEBUI: Sort torrent names case-insensitively in webui (airium)</li>
<li>WEBUI: Support exclusions in WebUI table filters (Thomas Piccirello)</li>
<li>WEBUI: Don't save preferences until all options are processed (Tom Piccirello)</li>
<li>WEBUI: Disable port selection when &quot;Use different port on each startup&quot; is selected (Chocobo1)</li>
<li>WEBUI: Remove max character limit of location path (Clément Pera)</li>
<li>RSS: Better widget for choosing file path in automated downloader (thalieht)</li>
<li>RSS: Allow to cancel/retry the fetching of feeds (glassez)</li>
<li>RSS: Add create subfolder option to RSS auto-download rules (Xegor)</li>
<li>RSS: Log &quot;RSS Feed successfully downloaded&quot; event (glassez)</li>
<li>SEARCH: Add default tooltip &quot;Searching...&quot; on tab creation. (paolo-sz)</li>
<li>SEARCH: Avoid crashes on torrent search (paolo-sz)</li>
<li>SEARCH: Add right click menu to SearchJobWidget (Chocobo1)</li>
<li>SEARCH: Rename label in search widget (Chocobo1)</li>
<li>SEARCH: Add more copy field actions to search widget (Chocobo1)</li>
<li>SEARCH: Remove buttons from search widget (Chocobo1)</li>
<li>SEARCH: Update python installer URL (Chocobo1)</li>
<li>WINDOWS: Drop support for &lt; Windows 7</li>
<li>WINDOWS: Allow headless builds on Windows (knackebrot)</li>
<li>WINDOWS: Add option to control qBittorrent process memory priority (Chocobo1)</li>
<li>LINUX: Add content_rating, release tags to appdata (Peter Eszlari)</li>
<li>LINUX: Update .appdata descriptions (Chocobo1)</li>
<li>LINUX: Use reverse DNS convention for metadata files naming (Chocobo1)</li>
<li>LINUX: Adjust open file descriptor limit on startup to max (Chocobo1)</li>
<li>MACOS: Drop support for &lt; macOS 10.10 (Yosemite)</li>
<li>MACOS: Replace deprecated <code>qt_mac_set_dock_menu()</code> (Chocobo1)</li>
<li>MACOS: Add some padding to macOS app icon (Nick Korotysh)</li>
<li>OTHER: Raise minimum C++ version to C++14 (Chocobo1)</li>
<li>OTHER: Raise minimum Qt version to 5.9.0 (sledgehammer999)</li>
<li>OTHER: Drop support of libtorrent &lt; 1.1.10 (glassez)</li>
<li>OTHER: Drop upgrade code from older saving systems (sledgehammer999)</li>
<li>OTHER: Update INSTALL dependencies (Chocobo1)</li>
<li>OTHER: Optimize PNG images losslessly with zopflipng (Peter Dave Hello)</li>
<li>OTHER: Optimize svg files using SVGO (sledgehammer999)</li>
<li>OTHER: QMake: Compile translations at build time (glassez)</li>
<li>OTHER: Drop support for &quot;BC Link&quot; format (Chocobo1)</li>
<li>OTHER: Lots of code refactorings, cleanups, improvements and optimizations (Chocobo1, glassez, thalieht)</li>
</ul>
<h3>Thursday November 21st 2019 - qBittorrent v4.2.0RC_20191121_9c1617b9778 release</h3>
<p>qBittorrent v4.2.0RC_20191121_9c1617b9778 release was released.<br>
For Windows only the 64-bit build is available for the RC release. Changes included in the stable series aren't mentioned below.<br>
The macOS build will follow.<br>
The final version of 4.2.0 will be released at the end of the month.<br>
<strong>ATTENTION:</strong> This RC release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the stable versions (and alpha releases). If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br>
<strong>Changes in v4.2.0RC_20191121_9c1617b9778 after the previous beta:</strong></p>
<ul>
<li>FEATURE: Allow to select multiple entries in &quot;banned IP&quot; dialog (Chocobo1)</li>
<li>FEATURE: Reallow to pause checking torrents (thalieht)</li>
<li>FEATURE: Reallow to force recheck torrents that aren't fully started (thalieht)</li>
<li>FEATURE: Add &quot;Preview file&quot; double-click action (warren)</li>
<li>BUGFIX: Fix country name misspelling (horgan)</li>
<li>RSS: Add create subfolder option to RSS auto-download rules (Xegor)</li>
<li>WINDOWS: Add option to control qBittorrent process memory priority (Chocobo1)</li>
</ul>
<h3>Thursday October 31st 2019 - qBittorrent v4.1.9.1 release</h3>
<p>qBittorrent v4.1.9.1 was released to fix a Windows only regression. Builds for other OSes won't be made.<br></p>
<ul>
<li>WINDOWS: Fix a problem with bigger dialogs due to wrong DPI reported by the system (Chocobo1)</li>
</ul>
<h3>Sunday October 27th 2019 - qBittorrent v4.1.9 and v_4.2.0beta1_20191027_9c466d84ec0 release</h3>
<p>qBittorrent v4.1.9 and v_4.2.0beta1_20191027_9c466d84ec0 release were released.<br>
For Windows only the 64-bit build is available for the beta release. Changes included in the stable series aren't mentioned below.<br>
<strong>ATTENTION:</strong> This beta release uses the libtorrent 1.2.x series. It saves fastresumes a bit differently than the 1.1.x series, which are used so far in the stable versions (and alpha releases). If you run it and then downgrade to a previous qBittorrent version then your torrents will probably start rechecking.<br>
<strong>Changes in v4.1.9:</strong></p>
<ul>
<li>BUGFIX: Preserve relative order when moving to top/bottom in queue (Chocobo1)</li>
<li>WINDOWS: Use real physical screen DPI (Chocobo1)</li>
<li>WEBUI: Bump Web API version</li>
</ul>
<p><strong>Changes in v_4.2.0beta1_20191027_9c466d84ec0 after the previous alpha:</strong></p>
<ul>
<li>FEATURE: Ability to open file or trigger torrect action via keypad Enter (Chocobo1)</li>
<li>FEATURE: Add &quot;Remove torrent and its files&quot; option to share ratio limiting (thalieht)</li>
<li>BUGFIX: Rename share ratio limiting options (thalieht)</li>
</ul>
<h3>Thursday September 26th 2019 - qBittorrent v4.1.8 and v4.2.0alpha2_20190923_918ccefdc4a release</h3>
<p>qBittorrent v4.1.8 and v4.2.0alpha2_20190923_918ccefdc4a release were released.<br>
For Windows only the 64-bit build is available for the alpha release. Changes included in the stable series aren't mentioned below.<br>
After about ~2 weeks another release of the v4.2.x series will be made. Stay tuned to download and test. But remember to read the <code>News</code> section before testing. Known incompatibilities will be mentioned.<br>
<strong>Changes in v4.1.8:</strong></p>
<ul>
<li>BUGFIX: Fix filename validation on non-Windows OS (Chocobo1)</li>
<li>BUGFIX: ScanFolders/FileSystemWatcher now detect magnet files with case insensitivity in filename (Chocobo1)</li>
<li>BUGFIX: Fix failed seeding after creating a torrent and auto-adding it to the session (Chocobo1)</li>
</ul>
<p><strong>Changes in v4.2.0alpha2_20190923_918ccefdc4a after the previous alpha:</strong></p>
<ul>
<li>FEATURE: Add option to align file to piece boundary when creating new torrent (Chocobo1)</li>
<li>BUGFIX: Move &quot;Check for program updates&quot; checkbox to the Behavior settings (Chocobo1)</li>
<li>BUGFIX: Improve error messages for URL seed (Chocobo1)</li>
<li>PERFORMANCE: Faster/efficient way of handling updates in the Transfer list (Chocobo1)</li>
<li>WEBUI: Disable port selection when &quot;Use different port on each startup&quot; is selected (Chocobo1)</li>
<li>WEBUI: Remove max character limit of location path (Clément Pera)</li>
<li>RSS: Allow to cancel/retry the fetching of feeds (glassez)</li>
</ul>
<h3>Saturday August 24th 2019 - qBittorrent v4.2.0alpha1_20190824_69f665ed016 release</h3>
<p>qBittorrent v4.2.0alpha1_20190824_69f665ed016 was released.<br>
For Windows only the 64-bit build is available for the alpha release. Changes included in the stable series aren't mentioned below.</p>
<ul>
<li>FEATURE: Libtorrent 1.2.x series are supported now (glassez)</li>
<li>FEATURE: Add OpenSSL version to GUI and stackdump (Chocobo1)</li>
<li>FEATURE: Add zlib version to GUI &amp; stackdump (silverqx)</li>
<li>FEATURE: Use PBKDF2 for storing GUI lock password. You will need to set your password again. (Chocobo1)</li>
<li>FEATURE: Rename &quot;#&quot; column to &quot;Tier&quot; in the tracker list (thalieht)</li>
<li>FEATURE: Allow setting larger checking memory usage in GUI (airium)</li>
<li>FEATURE: Converted remaining icons to svg (Bert Verhelst)</li>
<li>FEATURE: Replace CheckBox with Arrow in the side panel (Prince Gupta)</li>
<li>FEATURE: Log performance alerts from libtorrent (Chocobo1)</li>
<li>FEATURE: Use native folder icon in content tree (Chocobo1)</li>
<li>FEATURE: Move copy actions under a submenu (Chocobo1)</li>
<li>FEATURE: Add &quot;Socket backlog size&quot; option (Chocobo1)</li>
<li>FEATURE: Add &quot;File pool size&quot; option (Chocobo1)</li>
<li>FEATURE: Allow styling with QSS stylesheets (Prince Gupta)</li>
<li>FEATURE: Add &quot;Tracker entries&quot; dialog (Chocobo1)</li>
<li>FEATURE: Add availability column (Chocobo1)</li>
<li>FEATURE: Use a randomized port number for the first run (Chocobo1)</li>
<li>FEATURE: Enable Super Seeding mode once ratio/time limit is reached (thalieht)</li>
<li>FEATURE: Improve embedded tracker. Now it conforms to BEPs more closely. (Chocobo1)</li>
<li>BUGFIX: Avoid performance penalty when logger is full (Chocobo1)</li>
<li>BUGFIX: Remove the max half-open connections option (thalieht)</li>
<li>BUGFIX: Center align the section labels in advanced settings (thalieht)</li>
<li>BUGFIX: Add documentation links to some advanced settings (thalieht)</li>
<li>BUGFIX: Improve DownloadManager code (glassez)</li>
<li>BUGFIX: Limit DownloadHandler max redirection to 20 (Chocobo1)</li>
<li>BUGFIX: Log DownloadManager SSL errors (Chocobo1)</li>
<li>BUGFIX: Force recheck multiple torrents one by one (glassez)</li>
<li>BUGFIX: Close context menu when content model is reset (glassez)</li>
<li>BUGFIX: Improve Properties widget (glassez)</li>
<li>BUGFIX: Prevent flickering preview dialog (silver)</li>
<li>BUGFIX: Rename &quot;Prefer encryption&quot; to &quot;Allow encryption&quot; (thalieht)</li>
<li>BUGFIX: Fix search icon placement when using RTL languages (Chocobo1)</li>
<li>BUGFIX: Avoid combo boxes extending to the right in Options dialog (Chocobo1)</li>
<li>BUGFIX: Fix speed limit not applying to IPv6 peers (Chocobo1)</li>
<li>BUGFIX: Log failed file rename errors (Chocobo1)</li>
<li>BUGFIX: Fix wrong &quot;Time Active&quot; value displayed (Chocobo1)</li>
<li>BUGFIX: Rename priority to queue in the context of torrents (thalieht)</li>
<li>BUGFIX: Update remaining size of ignored files to 0 (Thomas Piccirello)</li>
<li>WEBUI: Use PBKDF2 for storing WebUI password. You will need to set your password again. (Chocobo1)</li>
<li>WEBUI: Use Javascript strict mode (Chocobo1)</li>
<li>WEBUI: Remove autocorrect/autocapitalise from filepaths on WebUI (AceLewis)</li>
<li>WEBUI: Display warning when Javascript is disabled (Chocobo1)</li>
<li>WEBUI: Remove mootools lib from login page (Chocobo1)</li>
<li>WEBUI: Prevent login credential appearing in URL (Chocobo1)</li>
<li>WEBUI: Load WebUI certificate &amp; key from file path (Chocobo1)</li>
<li>WEBUI: Add migration code for WebUI https related change (Chocobo1)</li>
<li>WEBUI: Fix wrong element id being used (Thomas Piccirello)</li>
<li>WEBUI: Fix direction of Web UI sorted column icon (Thomas Piccirello)</li>
<li>WEBUI: Match WebUI About page to GUI (Thomas Piccirello)</li>
<li>WEBUI: Simplify tab logic (Thomas Piccirello)</li>
<li>WEBUI: Separate URL components before percent-decoding (glassez)</li>
<li>WEBUI: Capitalize event name (Thomas Piccirello)</li>
<li>WEBUI: Fix bug where input wouldn't always be focused (Thomas Piccirello)</li>
<li>WEBUI: Add Web UI support for escape key (Thomas Piccirello)</li>
<li>WEBUI: Fix broken image link (Tom Piccirello)</li>
<li>WEBUI: Include application version in css/js url for cache busting (Thomas Piccirello)</li>
<li>WEBUI: Update WebUI img to use svg images (Chocobo1)</li>
<li>WEBUI: Fix speed limit icon too large on WebUI (Chocobo1)</li>
<li>WEBUI: Fix misaligned icons in STATUS list in GUI (Chocobo1)</li>
<li>WEBUI: Drop legacy WebAPI support (glassez)</li>
<li>WEBUI: Allow WebUI Content tab to be sorted (Thomas Piccirello)</li>
<li>WEBUI: Encode torrent name before passing in URL (Thomas Piccirello)</li>
<li>WEBUI: Move WebUI Peers code to separate file (Thomas Piccirello)</li>
<li>WEBUI: Prevent WebUI tables from being highlighted (Thomas Piccirello)</li>
<li>WEBUI: Allow WebUI Trackers table to be manipulated (Thomas Piccirello)</li>
<li>WEBUI: Fix only the first newline char is replaced (Chocobo1)</li>
<li>WEBUI: Fix missing semicolon in WebUI (Chocobo1)</li>
<li>WEBUI: Add autocomplete attribute to WebUI (Chocobo1)</li>
<li>WEBUI: Always use index.html as default page (CzBiX)</li>
<li>WEBUI: Set title attribute for all WebUI table cells (Thomas Piccirello)</li>
<li>WEBUI: Align WebUI login button to the right (Chocobo1)</li>
<li>WEBUI: Use force refresh on WebUI logout (Chocobo1)</li>
<li>WEBUI: Use a random number for WebUI cache busting (Chocobo1)</li>
<li>WEBUI: Register protocol handler in WebUI for magnet links (Cory)</li>
<li>WEBUI: Add WebAPI session timeout settings (Chocobo1)</li>
<li>WEBUI: Fix encoding of special characters (Tom Piccirello)</li>
<li>WEBUI: Avoid word wrap in webui footer (airium)</li>
<li>WEBUI: Add advanced options in WebUI (Zhaoyu Gan)</li>
<li>WEBUI: Move WebUI copy actions under a submenu (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI support for triggering context menus on mobile (Thomas Piccirello)</li>
<li>WEBUI: Implement tag management for WebUI (Vasiliy Halimonchuk)</li>
<li>WEBUI: Fix WebUI removing parameters from magnet links (Thomas Piccirello)</li>
<li>WEBUI: Enable by default the search tab (Thomas Piccirello)</li>
<li>WEBUI: Add context menu to Web UI search table (Thomas Piccirello)</li>
<li>WEBUI: Display files hierarchically in Web UI content tab (Thomas Piccirello)</li>
<li>WEBUI: Add ability to add and ban a peer from the Web UI (Thomas Piccirello)</li>
<li>WEBUI: Increase WebUI window heights (Thomas Piccirello)</li>
<li>WEBUI: Sort torrent names case-insensitively in webui (airium)</li>
<li>WEBUI: Support exclusions in WebUI table filters (Thomas Piccirello)</li>
<li>WEBUI: Don't save preferences until all options are processed (Tom Piccirello)</li>
<li>RSS: Better widget for choosing file path in automated downloader (thalieht)</li>
<li>SEARCH: Add default tooltip &quot;Searching...&quot; on tab creation. (paolo-sz)</li>
<li>SEARCH: Avoid crashes on torrent search (paolo-sz)</li>
<li>SEARCH: Add right click menu to SearchJobWidget (Chocobo1)</li>
<li>SEARCH: Rename label in search widget (Chocobo1)</li>
<li>SEARCH: Add more copy field actions to search widget (Chocobo1)</li>
<li>SEARCH: Remove buttons from search widget (Chocobo1)</li>
<li>SEARCH: Update python installer URL (Chocobo1)</li>
<li>WINDOWS: Drop support for &lt; Windows 7</li>
<li>WINDOWS: Allow headless builds on Windows (knackebrot)</li>
<li>LINUX: Add content_rating, release tags to appdata (Peter Eszlari)</li>
<li>LINUX: Update .appdata descriptions (Chocobo1)</li>
<li>LINUX: Use reverse DNS convention for metadata files naming (Chocobo1)</li>
<li>LINUX: Adjust open file descriptor limit on startup to max (Chocobo1)</li>
<li>MACOS: Drop support for &lt; macOS 10.10 (Yosemite)</li>
<li>MACOS: Replace deprecated <code>qt_mac_set_dock_menu()</code> (Chocobo1)</li>
<li>MACOS: Add some padding to macOS app icon (Nick Korotysh)</li>
<li>OTHER: Raise minimum C++ version to C++14 (Chocobo1)</li>
<li>OTHER: Raise minimum Qt version to 5.9.0 (sledgehammer999)</li>
<li>OTHER: Drop support of libtorrent &lt; 1.1.10 (glassez)</li>
<li>OTHER: Drop upgrade code from older saving systems (sledgehammer999)</li>
<li>OTHER: Update INSTALL dependencies (Chocobo1)</li>
<li>OTHER: Optimize PNG images losslessly with zopflipng (Peter Dave Hello)</li>
<li>OTHER: Optimize svg files using SVGO (sledgehammer999)</li>
<li>OTHER: QMake: Compile translations at build time (glassez)</li>
<li>OTHER: Drop support for &quot;BC Link&quot; format (Chocobo1)</li>
<li>OTHER: Lots of code refactorings, cleanups, improvements and optimizations (Chocobo1, glassez, thalieht)</li>
</ul>
<h3>Sunday August 4th 2019 - qBittorrent v4.1.7 release</h3>
<p>qBittorrent v4.1.7 was released.<br>
The macOS build supports Sierra as minimum version. If you use an older macOS version then you should compile qBittorrent with an older Qt version that has support for your OS version.</p>
<ul>
<li>FEATURE: Add 12 hour and 24 hour speed graphs (dzmat)</li>
<li>FEATURE: Change &quot;Add new torrent&quot; dialog to horizontal layout (Evgeny Lensky)</li>
<li>BUGFIX: Fix messed up symbols in log (Chocobo1)</li>
<li>BUGFIX: Fix incomplete file extension not applied for new torrents (Chocobo1)</li>
<li>BUGFIX: Save updated resume data for completed torrents (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Fix requested torrent resume data handling (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Prevent command injection via &quot;Run external program&quot; function (Chocobo1)</li>
<li>BUGFIX: Avoid race conditions when adding torrent (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Fix torrent checking issues (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Use proper log message when there are no error (Chocobo1)</li>
<li>BUGFIX: Fix torrent properties not saved for paused torrents (Chocobo1)</li>
<li>BUGFIX: Some improvements on qtsingleapplication code (Chocobo1)</li>
<li>BUGFIX: Remove limits of &quot;Disk cache expiry interval&quot; setting (Chocobo1)</li>
<li>BUGFIX: Remove upper limit of &quot;Disk cache&quot; setting (Chocobo1)</li>
<li>BUGFIX: Fix crash when removing phantom tags (Chocobo1)</li>
<li>BUGFIX: Improve handleFileErrorAlert error message (Chocobo1)</li>
<li>BUGFIX: Fix updated save path not saved for paused torrents (Chocobo1)</li>
<li>BUGFIX: Log save_resume_data_failed_alert (Chocobo1)</li>
<li>BUGFIX: Don't remove parent directories (Chocobo1)</li>
<li>BUGFIX: Properly remove empty leftover folders after rename (Chocobo1)</li>
<li>BUGFIX: Focus behavior row in Options dialog (silverqx)</li>
<li>BUGFIX: Fix unable to rename folder on Windows when same is used in different case(Chocobo1)</li>
<li>BUGFIX: Fix unable to control add torrent dialogs when opened simultaneously (Chocobo1)</li>
<li>BUGFIX: Disable &quot;Upload mode&quot; when start preloaded torrent (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Fix wrong comparison result when sorting items(Chocobo1)</li>
<li>BUGFIX: Fix sequential downloading when redirected (Vladimir Golovnev (Glassez))</li>
<li>BUGFIX: Fix typos (Chocobo1)</li>
<li>BUGFIX: Fix assertion fail (Chocobo1)</li>
<li>BUGFIX: Change number of time axis divisions from 5 to 6 for convenience (dzmat)</li>
<li>BUGFIX: Don't turn window blank when closed to system tray (Ekin Dursun)</li>
<li>WEBUI: Fix WebUI encoding of special characters (Thomas Piccirello)</li>
<li>WEBUI: Change the speed unit from Bytes/s to KiB/s for the rate limiter(jerrymakesjelly)</li>
<li>WEBUI: Fix '+' char not decoded to space correctly (Chocobo1)</li>
<li>RSS: Ignore RSS articles with non-unique identifiers (Vladimir Golovnev (Glassez))</li>
<li>RSS: Perform more RSS parsing in working thread (Vladimir Golovnev (Glassez))</li>
<li>RSS: Download RSS enclosure element if no proper MIME type is found (Matan Bareket)</li>
</ul>
<h3>Sunday May 5th 2019 - qBittorrent v4.1.6 release</h3>
<p>qBittorrent v4.1.6 was released.<br></p>
<ul>
<li>BUGFIX: Force recheck multiple torrents one by one in all possible cases. Closes #9120 (glassez)</li>
<li>BUGFIX: Don't query Google for tracker favicons, for privacy reasons (sledgehammer999)</li>
<li>BUGFIX: Work around the crash occurred in QTimer. Closes #9985 (Chocobo1)</li>
<li>BUGFIX: Increase the .torrent file download size limit to 100 MiB (thalieht)</li>
<li>BUGFIX: Disable downloading tracker favicons by default. Works around reported crashes in Linux. Closes #9667 (Chocobo1)</li>
<li>WEBUI: Separate URL components before percent-decoding. Allow special characters in query string parameters. Closes #9116 (glassez)</li>
<li>WEBUI: Prevent login credential appearing in URL. Closes #10221 (Chocobo1)</li>
<li>WEBUI: Display warning when Javascript is disabled (Chocobo1)</li>
<li>WEBUI: Fix translatable strings (Chocobo1)</li>
<li>WEBUI: Correctly handle '+' sign in x-www-form-urlencoded data. Closes #10451 (Chocobo1)</li>
<li>WEBUI: Remove closed connections immediately. Closes #10487 (Chocobo1)</li>
<li>WEBUI: Fix &quot;Create subfolder&quot; option is not working. Closes ##10392 (Chocobo1)</li>
<li>SEARCH: Make num enter key work the same as return in searchjobwidget (thalieht)</li>
<li>LINUX: Make window title bar icon work in Wayland (Peter Eszlari)</li>
<li>LINUX: Update appdata.xml file (Chocobo1)</li>
<li>MACOS: Fix progress bar drawing by using different style than native (Nick Korotysh)</li>
<li>MACOS: Updated and cleaned up fields in Info.plist (Nick Korotysh)</li>
<li>OTHER: Mention more translators in the about tab. Closes #10043 (sledgehammer999)</li>
</ul>
<h3>Monday December 24th 2018 - qBittorrent v4.1.5 release</h3>
<p>qBittorrent v4.1.5 was released.<br>
macOS: Support for Mavericks (10.9) was dropped due to usage of Qt 5.9. qBittorrent v4.1.5 should be able to work if you compile it with Qt 5.8.<br></p>
<ul>
<li>FEATURE: Add checking_mem_usage option to AdvancedSettings (FranciscoPombal)</li>
<li>FEATURE: Save torrents queue in separate file. Now a new file named 'queue' is created, saving on each line the infohash of each queued torrent in sorted order. (glassez)</li>
<li>BUGFIX: Fix regression on resuming torrents without metadata (thalieht)</li>
<li>BUGFIX: Reorder and rename Tracker list context menu option (Thomas Piccirello)</li>
<li>BUGFIX: Rename Tracker List columns (Thomas Piccirello)</li>
<li>BUGFIX: Show error message when Session failed to start (glassez)</li>
<li>BUGFIX: Embedded tracker: Use ip parameter from tracker request if provided (Chocobo1)</li>
<li>BUGFIX: Fix weekday names translations (Chocobo1)</li>
<li>BUGFIX: Fix strings not translated (Chocobo1)</li>
<li>WEBUI: Change qBittorrent exit message to HTML5 (Chocobo1)</li>
<li>WEBUI: Revise CSP header (Chocobo1)</li>
<li>WEBUI: Enforce referrer-policy in WebUI (Chocobo1)</li>
<li>WEBUI: Add torrent name filtering to WebUI (Thomas Piccirello)</li>
<li>WEBUI: Send numeric status without translation (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI Trackers context menu (Thomas Piccirello)</li>
<li>WEBUI: Add DHT, PeX, and LSD to WebUI Tracker list (Thomas Piccirello)</li>
<li>WEBUI: Add additional Tracker columns to WebUI (Thomas Piccirello)</li>
<li>WEBUI: Bump Web API version</li>
<li>WEBUI: Fix display bugs in WebUI Files tab. Remove &lt;IE9 support (Thomas Piccirello)</li>
<li>WEBUI: Fix incorrect priority value sent from WebUI (Thomas Piccirello)</li>
<li>WEBUI: Set priority for multiple files in one WebAPI request (Thomas Piccirello)</li>
<li>WEBUI: Match WebUI Peers table column order to GUI (Thomas Piccirello)</li>
<li>WEBUI: Fetch data less frequently when torrents tab isn't visible (Thomas Piccirello)</li>
<li>WEBUI: Add Search tab to WebUI (Thomas Piccirello)</li>
<li>WEBUI: Add ability to pass urls to the webui download page (Thomas Piccirello)</li>
<li>WEBUI: Fix JavaScript error (Tom Piccirello)</li>
<li>WEBUI: Disallow setting a blank alternative WebUI location (Thomas Piccirello)</li>
<li>WEBUI: Add slow torrent options (Thomas Piccirello)</li>
<li>WEBUI: Add &quot;Use alternative Web UI&quot; option (Thomas Piccirello)</li>
<li>WEBUI: Add &quot;Apply rate limit to peers on LAN&quot; option (Thomas Piccirello)</li>
<li>WEBUI: Add email &quot;From&quot; option (Thomas Piccirello)</li>
<li>WEBUI: Set WebUI download options using set preferences (Thomas Piccirello)</li>
<li>WEBUI: Show list of categories on WebUI download page (Thomas Piccirello)</li>
<li>WEBUI: Hide WebUI text input for custom monitor save locations (Thomas Piccirello)</li>
<li>WEBUI: Add &quot;When adding a torrent&quot; options (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI Auto TMM options (Thomas Piccirello)</li>
<li>WEBUI: Add speed limit icons to WebUI Speed options (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI Random port button and proxy unencrypted password notice (Thomas Piccirello)</li>
<li>WEBUI: Replace WebUI Options fixed-width labels (Thomas Piccirello)</li>
<li>WEBUI: Reorder WebUI options to match GUI (Thomas Piccirello)</li>
<li>WEBUI: Allow WebUI sidebar to be collapsed (Thomas Piccirello)</li>
<li>WEBUI: Show ellipsis when WebUI sidebar is too narrow (Thomas Piccirello)</li>
<li>WEBUI: Fix WebUI bug on override of Start Download option.Closes #9855. (Tom Piccirello)</li>
<li>WEBUI: Fix missing words in WebUI (Chocobo1)</li>
<li>WEBUI: Add SameSite attribute to WebUI session cookie (Thomas Piccirello)</li>
<li>WEBUI: Put WebUI security related options into a groupbox (Chocobo1)</li>
<li>WEBUI: Add option for WebUI Host header validation (Chocobo1)</li>
<li>WEBUI: Show icon in WebUI sorted column (Thomas Piccirello)</li>
<li>RSS: Keep track of REPACK/PROPER downloads. Closes #9898. (Stephen Dawkins)</li>
<li>SEARCH: Only instantiate SearchPluginManager as needed (Thomas Piccirello)</li>
<li>MACOS: Make file icon look like other macOS icons (Nick Korotysh)</li>
<li>MACOS: Save option to start minimized in Mac (thalieht)</li>
</ul>
<h3>Monday November 19th 2018 - qBittorrent v4.1.4 release</h3>
<p>qBittorrent v4.1.4 was released.<br>
The macOS builds will follow in a couple of days.<br>
There will be 1-2 more releases in the 4.1.x series. After that we will switch to 4.2.x. The 4.2.x series will drop support for versions of Windows before Windows 7.<br>
<strong>EDIT(2018-11-20):</strong> The installers for 4.1.4 were deleted almost immediately after release. Crashes were reported on Windows 10 for the 64bit installer. See bug <a href="https://github.com/qbittorrent/qBittorrent/issues/9865">#9865</a>. New installers will be uploaded when the problem is fixed.<br>
<strong>EDIT(2018-11-22):</strong> The crash issue has been resolved. The installers are available now.</p>
<ul>
<li>FEATURE: Recognize *.ts files as previewable (silver)</li>
<li>FEATURE: Allow to disable speed graphs (dzmat)</li>
<li>FEATURE: Clear LineEdit on ESC (silverqx)</li>
<li>BUGFIX: Fix divide-by-zero crash (Chocobo1)</li>
<li>BUGFIX: Remove speed limit checkbox in Options dialog (Chocobo1)</li>
<li>BUGFIX: Fix speed graph &quot;high speeds&quot; bug (dzmat)</li>
<li>BUGFIX: Don't update torrent status unnecessarily (glassez)</li>
<li>BUGFIX: Improve force recheck of paused torrent (glassez)</li>
<li>BUGFIX: Restore torrent in two steps (glassez)</li>
<li>BUGFIX: Improve scaling of speed graphs (dzmat)</li>
<li>BUGFIX: Add isNetworkFileSystem() detection on Windows. This allows network mounts to be monitored correctly by polling timer. (Chocobo1)</li>
<li>BUGFIX: Reduce horizontal graphs resolution. Improves performance. (dzmat)</li>
<li>BUGFIX: Don't recheck just checked torrent (mj-p, glassez)</li>
<li>BUGFIX: Add SMB2 magic number (Chocobo1)</li>
<li>BUGFIX: Restore startup performance to v4.1.2 times. Needs at least libtorrent 1.1.10 (sledgehammer999)</li>
<li>BUGFIX: Make strings actually translatable (sledgehammer999)</li>
<li>WEBUI: Handle downloading .torrent file as success (Tom Piccirello)</li>
<li>WEBUI: Fix Alternative Web UI to be available (glassez)</li>
<li>WEBUI: Consider empty locale setting as not set (glassez)</li>
<li>WEBUI: Add free disk space to WebUI status bar (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI search API controller (Thomas Piccirello)</li>
<li>WEBUI: Fix WebUI Auto TMM context menu bug (Thomas Piccirello)</li>
<li>WEBUI: Use independent translation for WebUI (glassez)</li>
<li>WEBUI: Add categories WebAPI (Thomas Piccirello)</li>
<li>WEBUI: Fix minor JavaScript defects (Thomas Piccirello)</li>
<li>WEBUI: Add locale to js file path (Thomas Piccirello)</li>
<li>WEBUI: Translate WebUI torrents Status column (Thomas Piccirello)</li>
<li>WEBUI: Bump Web API version</li>
<li>RSS: Allow to disable downloading REPACK/PROPER matches (Stephen Dawkins)</li>
<li>RSS: Improve RSS Feed updating (glassez)</li>
<li>SEARCH: Allow resizing search filter in search job (thalieht)</li>
<li>SEARCH: Improve parser for search engine versions.txt (Chocobo1)</li>
<li>SEARCH: Update Python URLs (Chocobo1)</li>
<li>SEARCH: Fix asking to install Python (Chocobo1)</li>
<li>SEARCH: Reformat python code to be compliant with PEP8 (Chocobo1)</li>
<li>OTHER: cmake: restore out-of-source build (Eugene Shalygin)</li>
<li>OTHER: cmake: cmake: use C++14 when available (Eugene Shalygin)</li>
</ul>
<h3>Tuesday September 18th 2018 - qBittorrent v4.1.3 release</h3>
<p>qBittorrent v4.1.3 was released.<br></p>
<ul>
<li>FEATURE: Preselect name without extension when renaming files (thalieht)</li>
<li>FEATURE: Allow setting seq &amp; first/last from context menu without metadata (thalieht)</li>
<li>BUGFIX: Show &quot;N/A&quot; if there is no scrape (thalieht)</li>
<li>BUGFIX: Save option about tracker favicons under correct key (sledgehammer999)</li>
<li>BUGFIX: When file data are unreachable pause torrent and show &quot;Missing Files&quot; status (temporary fix) (sledgehammer999)</li>
<li>BUGFIX: Don't disable DHT when using force proxy (Thomas Piccirello)</li>
<li>BUGFIX: Correctly save torrent queue position/state/priority changes in fastresume (glassez, thalieht, sledgehammer999)</li>
<li>BUGFIX: Fix icon height/width ratio (Chocobo1)</li>
<li>BUGFIX: Fix values sorted wrong in &quot;Last Activity&quot; column (Chocobo1)</li>
<li>BUGFIX: Replace png icons with svg (Chocobo1)</li>
<li>WEBUI: Allow WebUI sidebar filters to be hidden (Thomas Piccirello)</li>
<li>WEBUI: Increase WebUI Options initial height (Thomas Piccirello)</li>
<li>WEBUI: Adjust WebUI Options form alignment (Thomas Piccirello)</li>
<li>WEBUI: Fix WebUI unreachable issue (Chocobo1)</li>
<li>WEBUI: Require torrent category creation to be explicit (Thomas Piccirello)</li>
<li>WEBUI: Include category save path in web api sync data (Thomas Piccirello)</li>
<li>WEBUI: Add save path and editing to WebUI new category dialog (Thomas Piccirello)</li>
<li>WEBUI: Bump Web API version</li>
<li>SEARCH: Refactor in searchjob to always color visited entries (thalieht)</li>
<li>SEARCH: Set &quot;enter&quot; as shortcut to download the selected torrents in search job (thalieht)</li>
<li>SEARCH: Add regex option in the search filter's context menu (thalieht)</li>
<li>LINUX: Fix GUI scaling issue on Linux (Chocobo1)</li>
<li>LINUX: Fix regression that broke installing desktop file (Eli Schwartz)</li>
<li>OPENBSD: Better filesystem support for filewatcher (Elias M. Mariani)</li>
</ul>
<h3>Sunday August 12th 2018 - qBittorrent v4.1.2 release</h3>
<p>qBittorrent v4.1.2 was released.<br></p>
<ul>
<li>FEATURE: New options for &quot;inhibit sleep&quot; (Lukas Greib)</li>
<li>FEATURE: Add option for regexps in the transferlist search filter's context menu (thalieht)</li>
<li>FEATURE: Add async io threads option to AdvancedSettings (tjjh89017)</li>
<li>FEATURE: Allow save resume interval to be disabled (Chocobo1)</li>
<li>FEATURE: Add checkbox for recursive download dialog (Chocobo1)</li>
<li>FEATURE: Add changelog link in program updater (Chocobo1)</li>
<li>BUGFIX: Avoid allocating large memory when loading a .torrent file (Couchy)</li>
<li>BUGFIX: Notify users on 1st time close/minimize to tray (sledgehammer999)</li>
<li>BUGFIX: Fix I/O error after fetching magnet metadata (Chocobo1)</li>
<li>BUGFIX: Never save resume data for already paused torrents (glassez)</li>
<li>BUGFIX: Make ProgramUpdater upgrade to 64-bit qbt when running on 64-bit Windows (Chocobo1)</li>
<li>BUGFIX: Put temporary files in qbt own temp folder (Chocobo1)</li>
<li>BUGFIX: Avoid potentially setting the wrong piece priorities (Chocobo1)</li>
<li>BUGFIX: Various code refactorings/improvements (Chocobo1, thalieht, glassez)</li>
<li>BUGFIX: Add options &quot;Download in sequential order&quot; and &quot;Download first and last pieces first&quot; in AddNewTorrentDialog (Chocobo1)</li>
<li>BUGFIX: Download favicon using appropriate protocol (glassez)</li>
<li>BUGFIX: Apply proxy settings on DownloadManager creation (glassez)</li>
<li>BUGFIX: Improve torrent initialization (glassez)</li>
<li>BUGFIX: Save resume data on torrent change events (glassez)</li>
<li>BUGFIX: Increase default resume data save interval (Chocobo1)</li>
<li>BUGFIX: Work around crash when processing recursive download. Closes #9086 (Chocobo1)</li>
<li>BUGFIX: Reduce queries to python version (Chocobo1)</li>
<li>BUGFIX: Disable certain mouse wheel events in Options dialog (Chocobo1)</li>
<li>WEBUI: Send all rechecks in one request (Thomas Piccirello)</li>
<li>WEBUI: Add WebUI Force Reannounce option (Thomas Piccirello)</li>
<li>WEBUI: Create non-existing path in setLocationAction() (Goshik)</li>
<li>WEBUI: Add WebUI support for Mac ⌘ (Command) key (Thomas Piccirello)</li>
<li>WEBUI: Show current save path in 'Set location' window (Goshik)</li>
<li>WEBUI: Fix WebUI cache behavior for css files (Chocobo1)</li>
<li>WEBUI: Send Cache-Control header in WebUI responses (Chocobo1)</li>
<li>WEBUI: Add form-action to CSP (Thomas Piccirello)</li>
<li>WEBUI: Add upgrade-insecure-requests to CSP when HTTPS is enabled (Thomas Piccirello)</li>
<li>WEBUI: Reset WebUI ban counter on login success (Chocobo1)</li>
<li>WEBUI: Add logging messages in WebUI login action (Chocobo1)</li>
<li>WEBUI: Add option to control CSRF protection (Chocobo1)</li>
<li>WEBUI: Add option to control WebUI clickjacking protection (Chocobo1)</li>
<li>RSS: Implement &quot;Sequential downloading&quot; feature. Closes #6835 (glassez)</li>
<li>RSS: Don't use RSS feed URLs as base for file names. Closes #8399 (glassez)</li>
<li>SEARCH: Add a name filter for search results (thalieht)</li>
<li>SEARCH: Fix python version detection (Chocobo1)</li>
<li>SEARCH: Clear python cache conditionally (Chocobo1)</li>
<li>SEARCH: Properly normalize version string before parsing it (hannsen)</li>
<li>WINDOWS: Turn on Control Flow Guard for MSVC builds (Chocobo1)</li>
<li>MACOS: Replace deprecated function IOPMAssertionCreate() on macOS (Chocobo1)</li>
<li>OTHER: Fix CMake build with QtSingleApplication. Fixes #9196 (Eugene Shalygin)</li>
</ul>
<h3>Sunday May 27th 2018 - qBittorrent v4.1.1 release</h3>
<p>qBittorrent v4.1.1 was released.<br>
Important fixes are in the version of libtorrent used. It fixes SOCKS5 issues and and tracker announces about downloaded/uploaded data.</p>
<ul>
<li>FEATURE: Add 'Moving' state for torrents being relocated/moved (sledgehammer999)</li>
<li>FEATURE: Show rechecking progress (sledgehammer999)</li>
<li>FEATURE: Add option to remember last used save path (glassez)</li>
<li>FEATURE: Torrent name is also renamed if the content was renamed in the &quot;Add New Torrent&quot; dialog (glassez)</li>
<li>FEATURE: Relax behavior of &quot;Download first and last piece first&quot;. It applies to all files and not only to the previewable. (Chocobo1)</li>
<li>BUGFIX: Fix issues with translatable strings (Chocobo1)</li>
<li>BUGFIX: Fix displayed tracker messages (Chocobo1)</li>
<li>BUGFIX: Make settings file recovery more robust (Chocobo1)</li>
<li>BUGFIX: Retry saving settings when operation failed (Chocobo1)</li>
<li>BUGFIX: Log successful torrent move (sledgehammer999)</li>
<li>BUGFIX: Fix deletion of old logs (sledgehammer999)</li>
<li>BUGFIX: Delete non-commited fastresume files (sledgehammer999)</li>
<li>BUGFIX: Don't migrate torrents that have newer fastresumes (sledgehammer999)</li>
<li>BUGFIX: Fix adding multiple torrents at once from WebUI (glassez)</li>
<li>BUGFIX: Improve &quot;Run External Program&quot; behavior. On Windows, a backslash isn't appended to paths from path variables (Chocobo1)</li>
<li>BUGFIX: Suppress multiple I/O errors for the same torrent (sledgehammer999)</li>
<li>BUGFIX: Replace raster qbt logo with vector version (Chocobo1)</li>
<li>WEBUI: Fix wrong API method names (glassez)</li>
<li>WEBUI: Filter torrent info endpoint by hashes (Marcel Petersen)</li>
<li>WEBUI: Fix invalid API calls in WebUI (glassez)</li>
<li>WEBUI: Improve legacy API params handling (glassez)</li>
<li>WEBUI: Fix params handling for some legacy API methods (glassez)</li>
<li>WEBUI: Apply locale changes immediately in WebUI (Chocobo1)</li>
<li>WEBUI: Use 32px icons for favicon (Chocobo1)</li>
<li>WEBUI/RSS: Properly set RSS settings via API (glassez)</li>
<li>RSS: Fix auto-downloading rule when Smart filter with regular Episode filter are used (glassez)</li>
<li>RSS: Make &quot;Ignoring days&quot; to behave like other filters (glassez)</li>
<li>RSS: Place &quot;Use Smart Episode Filter&quot; more correctly (glassez)</li>
<li>RSS: Use RSS feed update time as a fallback (glassez)</li>
<li>COSMETIC: Fix Stats dialog size (sledgehammer999)</li>
<li>MACOS: Fix GUI scaling factor on macOS (Chocobo1)</li>
<li>WINDOWS: Update icons (adem4ik)</li>
<li>LINUX: Fix open destination folder with Nautilus &gt; 3.28 (Evgeny Lensky)</li>
<li>OTHER: Code improvements and refactoring (thalieht, Nick Korotysh, Chocobo1)</li>
</ul>
<h3>Friday May 5th 2018 - qBittorrent v4.1.0 release</h3>
<p>qBittorrent v4.1.0 was released.<br>
This is a major version bump purely because there was a ton of code commits from the last one.<br>
There a new v2 WebAPI now, but v1 is still supported too.<br>
The Windows <strong>32-bit</strong> installer now uses Qt 5.6.3 instead of 5.7.1. The 5.6.3 version is an LTS release and newer than the 5.7.1 version. The 5.7.x series don't offer something useful for our usage.</p>
<ul>
<li>FEATURE: Add &quot;Coalesce reads &amp; writes&quot; checkbox in advanced options (Chocobo1)</li>
<li>FEATURE: Smart Filter for RSS (Stephen Dawkins)</li>
<li>FEATURE: Possibility to configure at which speed a torrent is considered slow (thalieht)</li>
<li>FEATURE: When creating a torrent you can choose to preserve the file order (toster, Chocobo1)</li>
<li>FEATURE: A new, redesigned and refactored WebAPI (glassez)</li>
<li>BUGFIX: Redefine CacheStatus.readRatio field. (Chocobo1)</li>
<li>BUGFIX: Clarify some terms in stats dialog (Chocobo1)</li>
<li>BUGFIX: Fix possible crash when using both share limits (thalieht)</li>
<li>BUGFIX: Disable options when <code>Disable connections not supported by proxies</code> is enabled (Thomas Piccirello)</li>
<li>BUGFIX: Add link to an explanation of <code>Disable connections not supported by proxies</code> (Thomas Piccirello)</li>
<li>BUGFIX: Fix typo in a log message (Andrei Stepanov)</li>
<li>BUGFIX: Fix loading very large torrents. Closes #8449. (Chocobo1)</li>
<li>BUGFIX: Fix reverting backslashes to slashes in run external program. Closes #7800 (Chocobo1)</li>
<li>BUGFIX: Use https for documentation links (Chocobo1)</li>
<li>BUGFIX: Use original scheme when downloading favicons (Chocobo1)</li>
<li>BUGFIX: Parse URL query string at application level (glassez)</li>
<li>BUGFIX: Properly reply to announce request (embedded tracker) (glassez)</li>
<li>BUGFIX: Add <code>Tags</code> parameter to &quot;Run External Program&quot; (Chocobo1)</li>
<li>BUGFIX: Fix various typos (Chocobo1)</li>
<li>BUGFIX: Refactor filesystem watcher. Delay before processing new files. (Chocobo1)</li>
<li>BUGFIX: Don't strip empty arguments passed to external program. Closes #8454. (Chocobo1)</li>
<li>BUGFIX: Stop creating Download folder on start (Chocobo1)</li>
<li>BUGFIX: Avoid data corruption when rechecking paused torrents (sledgehammer999)</li>
<li>BUGFIX: Fix crashes due to invalid iterator use (Luís Pereira)</li>
<li>BUGFIX: Fix renaming completed files (Chocobo1)</li>
<li>BUGFIX: Fix path separator in log messages (Chocobo1)</li>
<li>WEBUI: Switch built-in Web UI html to HTML5 (glassez)</li>
<li>WEBUI: WebUI Save user's resized window sizes (Thomas Piccirello)</li>
<li>WEBUI: Make download + upload windows resizable (Thomas Piccirello)</li>
<li>WEBUI: Add option to show/hide webui status bar (Thomas Piccirello)</li>
<li>WEBUI: Add &quot;Use proxy only for torrents&quot; option to webui (Thomas Piccirello)</li>
<li>WEBUI: Various fixes in the html code (Thomas Piccirello)</li>
<li>WEBUI: Don't unselect selected torrents after a few seconds (Thomas Piccirello)</li>
<li>WEBUI: Enable Http/1.1 persistence connection (Chocobo1)</li>
<li>WEBUI: Format Read cache hits as percentage (Thomas Piccirello)</li>
<li>WEBUI: Re-order and rename stats (Thomas Piccirello)</li>
<li>WEBUI: Right align stat values (Thomas Piccirello)</li>
<li>WEBUI: Enable Statistics window to be scrolled and resized (Tom Piccirello)</li>
<li>WEBUI: Save WebUI Statistics window size (Thomas Piccirello)</li>
<li>WEBUI: Make WebUI iframe windows scrollable on iOS (Thomas Piccirello)</li>
<li>WEBUI: Remove unused CSS from WebUI login page (Thomas Piccirello)</li>
<li>WEBUI: Consolidate CSS into style.css (Thomas Piccirello)</li>
<li>WEBUI: Resolve JavaScript errors (Thomas Piccirello)</li>
<li>WEBUI: Fix spacing in login form(Thomas Piccirello)</li>
<li>WEBUI: Update WebUI to be more compliant with HTML5 standard (Chocobo1)</li>
<li>WEBUI: Update clipboard.js to v2.0.0 (Chocobo1)</li>
<li>WEBUI: Remove unused JavaScript library (Chocobo1)</li>
<li>WEBUI: Fix setting preferences via WebAPI (glassez)</li>
<li>WEBUI: Rename property to match its definition (Thomas Piccirello)</li>
<li>WEBUI: Add Limit Share Ratio context menu option (Thomas Piccirello)</li>
<li>RSS: Disable Auto TMM when RSS rule has save path (glassez)</li>
<li>RSS: Process loaded RSS articles in case of error (glassez)</li>
<li>RSS: Resolve (X)HTML entities in RSS content (glassez)</li>
<li>SEARCH: Improve Search handling (glassez)</li>
<li>SEARCH: Calculate supported categories based on selected plugin (Thomas Piccirello)</li>
<li>SEARCH: Fix memory leak (Chocobo1)</li>
<li>COSMETIC: Use spinbox suffix to display rate/time units (thalieht)</li>
<li>COSMETIC: Avoid showing an empty row in AdvancedSettings (Chocobo1)</li>
<li>OTHER: Various code optimizations and fixes (Luís Pereira, Chocobo1)</li>
<li>OTHER: Fix build when using Clang under CMake (Luís Pereira)</li>
<li>OTHER: Allow to disable Stacktrace support (Nick Korotysh)</li>
<li>OTHER: Use RNG provided by OS (Chocobo1)</li>
</ul>
<h3>Friday February 16th 2018 - qBittorrent v4.0.4 release</h3>
<p>qBittorrent v4.0.4 was released.</p>
<ul>
<li>FEATURE: Add source field in Torrent creator. Closes #7965. (Chocobo1)</li>
<li>FEATURE: Torrent creator: raise maximum piece size to 32 MiB (Chocobo1)</li>
<li>FEATURE: Add a force reannounce option in the transfer list context menu. Closes #6448. (Jesse Bryan)</li>
<li>BUGFIX: Fix sorting of country flags column in Peers tab. (sledgehammer999)</li>
<li>BUGFIX: Fix natural sorting when the common part of 2 strings ends partially in a number which continues in the uncommon part. Closes #8080 #6732. (sledgehammer999)</li>
<li>BUGFIX: Fix application of speed limits on LAN and μTP connections. Closes #7745. (sledgehammer999)</li>
<li>BUGFIX: Make peer information flags in peerlist more readable. (thalieht)</li>
<li>BUGFIX: Fix gui issues on high DPI monitor. (Chocobo1)</li>
<li>BUGFIX: Fix dialog and column size on high DPI monitors. (Chocobo1)</li>
<li>BUGFIX: Fix constant status of '[F] Downloading'. Closes #7628. (sledgehammer999)</li>
<li>BUGFIX: Fix translation context. Closes #8211. (sledgehammer999)</li>
<li>BUGFIX: Separate subnet whitelist options into two lines. (Thomas Piccirello)</li>
<li>BUGFIX: Don't set application name twice. (Luís Pereira)</li>
<li>BUGFIX: Set default file log size to 65 KiB and delete backup logs older than 1 month. (sledgehammer999)</li>
<li>WEBUI: Only prepend scheme when it is not present. Closes #8057. (Chocobo1)</li>
<li>WEBUI: Add &quot;Remaining&quot; and &quot;Availability&quot; columns to webui Content tab. (Thomas Piccirello)</li>
<li>WEBUI: Make value formatting consistent with GUI (Thomas Piccirello)</li>
<li>WEBUI: Reposition Total Size column to match gui (Thomas Piccirello)</li>
<li>WEBUI: Add Tags and Time Active columns (Thomas Piccirello)</li>
<li>WEBUI: Use https for www.qbittorrent.org (Thomas Piccirello)</li>
<li>WEBUI: Match webui statuses to gui, closes #7516 (Thomas Piccirello)</li>
<li>WEBUI: Right-align stat values (Thomas Piccirello)</li>
<li>WEBUI: Add missing units. (Thomas Piccirello)</li>
<li>RSS: Fix crash when deleting rule because it tries to update. Closes #8094 (glassez)</li>
<li>RSS: Don't process new/updated RSS rules when disabled (glassez)</li>
<li>RSS: Remove legacy and corrupted RSS settings (glassez)</li>
<li>SEARCH: Search only when category is supported by plugin. Closes #8053. (jan.karberg)</li>
<li>SEARCH: Only add search separators as needed. (Thomas Piccirello)</li>
<li>COSMETIC: Tweak spacing in torrent properties widget and speed widget. (Chocobo1)</li>
<li>WINDOWS: Use standard folder icon for open file behavior on Windows. Closes #7880. (Chocobo1)</li>
<li>WINDOWS: Revert &quot;Run external program&quot; function. Now you will not be able to directly run batch scripts. (Chocobo1)</li>
<li>MACOS: Fix torrent file selection in Finder on mac (vit9696)</li>
<li>MACOS: Fix Finder reveal in preview and torrent contents (vit9696)</li>
<li>MACOS: Fix cmd+w not closing the main window on macOS (vit9696)</li>
<li>OTHER: Fix splitting of compiler flags in configure. Autoconf removes a set of [] during script translation, resulting in a wrong sed command. (sledgehammer999)</li>
<li>OTHER: configure: Parse all compiler related flags together. (sledgehammer999)</li>
<li>OTHER: Update copyright year. (sledgehammer999)</li>
</ul>
<h3>Sunday December 17th 2017 - qBittorrent v4.0.3 release</h3>
<p>Some more bugs fixed.<br>
macOS builds are available now too. Check the <strong>4.0.0</strong> changelog for the macOS specific new features.<br>
v4.0.3 changelog:</p>
<ul>
<li>BUGFIX: Add height padding to the transfer list icons. Closes #7951. (sledgehammer999)</li>
<li>BUGFIX: Allow to drag-n-drop URLs into mainwindow to initiate download. (Chocobo1)</li>
<li>BUGFIX: Fix crash when fitlering search results. Stable sorting is removed. Closes #7952.(Chocobo1)</li>
<li>WEBUI: Fix missing qbt logo on login page in webUI. Closes #7953. (Chocobo1)</li>
<li>WEBUI: Add check to avoid type error after logout. (Chocobo1)</li>
<li>WEBUI: Use POST for logout command. This is to avoid browser being smart to prefetch the link then logging out the user. (Chocobo1)</li>
<li>WEBUI: Fix WebUI is not reachable via IPv6. (glassez)</li>
<li>WINDOWS: Disable the &quot;?&quot; help button in all dialogs on Windows. Closes #7365. Requires Qt 5.10. (Chocobo1)</li>
</ul>
<h3>Friday December 1st 2017 - qBittorrent v4.0.2 release</h3>
<p>This is a hotfix release too. It addresses some important RSS issues. macOS builds will follow.<br>
<strong>NOTICE:</strong> If you find your torrents being paused instead of seeding, then right click on your torrent, choose <code>Limit shario ratio...</code> and adjust the setting.<br>
v4.0.2 changelog:</p>
<ul>
<li>BUGFIX: Fix crash on some systems when creating address object for 255.255.255.255. Closes #7735. (sledgehammer999)</li>
<li>PERFORMANCE: Change MixedModeAlgorithm default to TCP. This was the v3_3_x default and should sustain higher speeds. Closes #7779. (Chocobo1)</li>
<li>PERFORMANCE: Stop logging IP filter parsing errors after a while, otherwise the GUI freezes or qBittorrent doesn't start. (sledgehammer999)</li>
<li>GUI: Implement stable sort. Rows in transfer list shouldn't flicker anymore. (Chocobo1)</li>
<li>WEBUI: Fix build when webui is disabled. (Heiko Becker)</li>
<li>RSS: Fix build because of missing header. Closes #7805. (thoradia)</li>
<li>RSS: Fix RSS parser. (glassez)</li>
<li>RSS: Implement Import/Export RSS rules in legacy(aka v3_3_x) format. (glassez)</li>
<li>RSS: Implement Import/Export RSS rules in JSON format. (glassez)</li>
<li>WINDOWS: Fixed blurry text under Windows by setting DPI awareness to default. (TheNicker)</li>
<li>LINUX: Fix i386 build. (Evgeny Lensky)</li>
</ul>
<h3>Wednesday November 22nd 2017 - qBittorrent v4.0.1 release</h3>
<p>This is a hotfix release. It is also build against newer libtorrent code that fixes connectivity issues with proxies.<br>
v4.0.1 changelog:</p>
<ul>
<li>BUGFIX: Fix crash on opening torrent/magnet (uninitialized pointer). Closes #7739 #7723. (sledgehammer999)</li>
<li>BUGFIX: Enable preferences Apply button when ip banlist is modified (Thomas Piccirello)</li>
<li>BUGFIX: Allow drag-n-drop magnet links to mainwindow. Closes #7742. (Chocobo1)</li>
<li>BUGFIX: Fix crash when aborting a torrent creation process. Closes #7783. (Chocobo1)</li>
<li>BUGFIX: Correctly check if torrent passed during application start already exists. (sledgehammer999)</li>
<li>WEBUI: Add ip subnet whitelist for bypassing webui auth (Thomas Piccirello)</li>
<li>WEBUI: Fix logo missing in login page (Chocobo1)</li>
<li>COSMETIC: Fix english typo. (sledgehammer999)</li>
<li>OTHER: cmake: qtsingleapplication should always be built statically (luigino)</li>
</ul>
<h3>Monday November 20th 2017 - qBittorrent v4.0.0 release</h3>
<p>This is a major new release with a huge changelog. Enjoy!<br>
v4.0.0 changelog:</p>
<ul>
<li>FEATURE: Change qbittorrent logo. Issue #6467. (HVS, Atif Afzal, sledgehammer999)</li>
<li>FEATURE: New icon theme with SVG source, so we can scale it appropriately in the future. (Bert Verhelst)</li>
<li>FEATURE: Drop Qt 4 support. Raise minimum Qt version to 5.5.1 (evsh)</li>
<li>FEATURE: UI for managing locally banned IP list (dzmat)</li>
<li>FEATURE: Support for specifying where to save/load config files. Support for portable mode. (evsh)</li>
<li>FEATURE: It is now possible to pass options via ENV variables instead of cmd options. (evsh)</li>
<li>FEATURE: Allow to strip subfolder in multifile torrents. (glassez, sledgehammer999)</li>
<li>FEATURE: Allow cmd args to specify options when adding torrents. (Brian Kendall)</li>
<li>FEATURE: Widget for showing filesystem paths while typing. Used in the Add New Torrent and Options dialogs. (evsh)</li>
<li>FEATURE: Trackerlist: Allow to toggle columns (thalieht)</li>
<li>FEATURE: Add availability column to torrent content model and torrent properties window (evsh)</li>
<li>FEATURE: Implemented share limit by seeding time (naikel)</li>
<li>FEATURE: Revamp Torrent creator (Chocobo1)</li>
<li>FEATURE: Enable drag n drop to create torrent on mainwindow (Chocobo1)</li>
<li>FEATURE: Add show/hide statusbar option (takiz)</li>
<li>FEATURE: Show number of pieces. Closes #6774. (Chocobo1)</li>
<li>FEATURE: Allow to select &amp; delete multiple entries in &quot;Manage Cookies&quot; dialog (Chocobo1)</li>
<li>FEATURE: Fetch Favicons via google as a final fallback (KingLucius)</li>
<li>FEATURE: Add a Tags (multi-label) feature to the GUI. Closes #13. (tgregerson)</li>
<li>FEATURE: Use the system icons for each file type in the Content tab (evsh)</li>
<li>FEATURE: Use SVG files for monochrome tray icons. Closes #6085. (evsh)</li>
<li>FEATURE: Prefill torrent name when creating a new torrent. Closes #7229. (Chocobo1)</li>
<li>FEATURE: Expose more libtorrent options in advanced settings (Chocobo1)</li>
<li>FEATURE: Add comboBox for selecting BitTorrent protocol. Closes #6316. (Chocobo1)</li>
<li>FEATURE: Allow SMTP sender to be set. Closes #7575. (Chocobo1)</li>
<li>FEATURE: Allow to specify if announcing to all tiers is desired. (sledgehammer999)</li>
<li>FEATURE: Configurable number of history of paths in Add New Torrent dialog. (evsh)</li>
<li>BUGFIX: Adjust icons names to better fit FDO scheme (evsh)</li>
<li>BUGFIX: Optimized IP filter parsing, making blazingly fast (sledgehammer999, evsh)</li>
<li>BUGFIX: Fix dialogs didn't position on the correct screen which qBittorrent window is on. Closes #1690, #2474, #3538. (Chocobo1)</li>
<li>BUGFIX: Refactor and improve StatusBar (glassez)</li>
<li>BUGFIX: Set expiration date for newly added cookie to +2 years from now, instead of +99 years. (Chocobo1)</li>
<li>BUGFIX: Don't create subfolder inside temp folder (glassez)</li>
<li>BUGFIX: Don't replace existing files when relocating torrent (glassez)</li>
<li>BUGFIX: Fix explicit Torrent Management Mode in Add New Torrent dialog. Closes #5602. (sledgehammer999)</li>
<li>BUGFIX: Fix calculation of 'Average time in queue' stat under libtorrent 1.1.x (sledgehammer999)</li>
<li>BUGFIX: Don't disable bandwidth scheduler when manually switching speed limits. Closes #7306. (glassez)</li>
<li>BUGFIX: Fix dereferencing freed pointer. Closes #7420. (Chocobo1)</li>
<li>BUGFIX: Change the default cache size to 64MiB. (Chocobo1)</li>
<li>BUGFIX: The previous &quot;Disk write cache size&quot; is not accurate since it is also being used for read cache, so rename it to &quot;Disk cache&quot;. (Chocobo1)</li>
<li>BUGFIX: Replace dialog ok-cancel buttons with QDialogButtonBox, which follows the platform specific button order. (Chocobo1)</li>
<li>BUGFIX: Better reporting of success/failure of torrent and file deletion. (sledgehammer999)</li>
<li>BUGFIX: Fix last activity calculation. Closes #7461. (Chocobo1)</li>
<li>BUGFIX: Save state of options windows on cancel too. (silverqx)</li>
<li>BUGFIX: Persist size and treeview header state in preview dialog. (silverqx)</li>
<li>BUGFIX: Show torrent name in &quot;add new torrent&quot; dialog on merging trackers (Chocobo1)</li>
<li>BUGFIX: Properly pre-select the selected torrent's current ratio limiting options in  UpDownRatioDlg dialogs. Fixes #7352 (thalieht)</li>
<li>BUGFIX: Optimize code for SpeedWidget. (dzmat)</li>
<li>BUGFIX: Disable processing events when adding torrents(prevents crashes). Closes #7436. (Chocobo1)</li>
<li>BUGFIX: Open links in browser. Closes #7651. (Chocobo1)</li>
<li>BUGFIX: Change default settings for tracker/tier announces to mimic μTorrent behavior. (sledgehammer999)</li>
<li>BUGFIX: Explicitly set UPnP state on start-up. Closes #7338. (Chocobo1)</li>
<li>BUGFIX: Include/print caught signal in stackdump (Chocobo1)</li>
<li>COSMETIC: Trackerlist: Set text alignment of columns with numbers to the right (thalieht)</li>
<li>COSMETIC: Enable alternatingRowColors for &quot;Manage Cookie&quot; dialog (Chocobo1)</li>
<li>COSMETIC: Remove indentation for category/tag filter widgets in all platforms (thalieht)</li>
<li>COSMETIC: Add space between widgets in left side panel. Closes #7224. (Chocobo1, glassez)</li>
<li>COSMETIC: Unify preference window borders across the tabs (vit9696)</li>
<li>COSMETIC: Center Options dialog when showed. (silverqx)</li>
<li>COSMETIC: Show delete accelerator key in menu. closes #7508 (Nick Korotysh)</li>
<li>COSMETIC: Set QTextOption::NoWrap property in &quot;Download from URLs&quot; dialog (Chocobo1)</li>
<li>COSMETIC: Use SVG icons for the country flags. Closes #6223. (sledgehammer999)</li>
<li>WEBUI: Allow to load/use ECDSA certificate in webUI. (Chocobo1)</li>
<li>WEBUI: Add copy options to webui context menu (addresses #6815) (#7036) (Tom Piccirello)</li>
<li>WEBUI: Set torrent location from webui context menu (addresses #6815) (#7062) (Tom Piccirello)</li>
<li>WEBUI: Add option to rename torrent from WebUI (Thomas Piccirello)</li>
<li>WEBUI: Add auto torrent management to webui context menu (addresses #6815) (Thomas Piccirello)</li>
<li>WEBUI: Option for &quot;Create subfolder&quot; when adding new torrent. (thalieht)</li>
<li>WEBUI: Fix addPaused wrong default behavior. (Chocobo1)</li>
<li>WEBUI: Reposition &quot;Priority&quot; menu option in WebUI to match gui. Closes #7072. (Thomas Piccirello)</li>
<li>WEBUI: Report TCPServer errorString() if webui fails to listen to port. (Matthew Fioravante)</li>
<li>WEBUI: Exit gracefully when failed to initialize web server with qbt-nox (Chocobo1)</li>
<li>WEBUI: Add file-to-piece-index mappings in /query/propertiesFiles command (Chocobo1)</li>
<li>WEBUI: Add optional parameters for /command/download &amp; /command/upload (Chocobo1)</li>
<li>WEBUI: Print error messages upon receiving invalid header fields. (Chocobo1)</li>
<li>WEBUI: Add WebUi\Address config option. (Matthew Fioravante)</li>
<li>WEBUI: Reinitialize webUI server when &quot;IP address&quot; setting changed. An app restart won't be necessary from now on. (Chocobo1)</li>
<li>WEBUI: Improve log and error messages (Chocobo1)</li>
<li>SEARCH: Use explicit class for search plugin versions (evsh)</li>
<li>SEARCH: Remove all search plugins from repo. There is another repo named 'search-plugins'. (sledgehammer999)</li>
<li>SEARCH: Update the backend when a new plugin favicon is downloaded. (sledgehammer999)</li>
<li>SEARCH: Allow search plugins sorting. Closes #7526. (Nick Korotysh)</li>
<li>RSS: Redesigned RSS subsystem (glassez)</li>
<li>RSS: Do not use hardcoded colors in RSS feed view (evsh)</li>
<li>RSS: Improve RSS events logging (glassez)</li>
<li>WINDOWS: Use dpiawareness=1 on Windows. Closes #5393. (sledgehammer999)</li>
<li>WINDOWS: Reformat Windows build configuration files. (glassez)</li>
<li>LINUX: Allow custom tray icons when system icon theme is used. Closes #7403. (evsh)</li>
<li>MACOS: Various macOS UI improvements (vit9696)</li>
<li>MACOS: Fix main menu item location on macOS (vit9696)</li>
<li>MACOS: Fix macOS window restoration after using hide icon (vit9696)</li>
<li>MACOS: Fix notification display on macOS (vit9696)</li>
<li>OTHER: Use new classes/methods from libtorrent and stop using deprecate ones. (glassez)</li>
<li>OTHER: Various string fixes (Allan Nordhøy, sledgehammer999)</li>
<li>OTHER: cmake: do not use Qt5Widgets when locating QtSingleApplication. Closes #7551. (evsh)</li>
<li>OTHER: Update BOOST m4 macros and simplify AX_BOOST_BASE usage (Chocobo1)</li>
<li>OTHER: Drop OS/2 support. (sledgehammer999)</li>
<li>OTHER: Optimize file size of PNG and SVG files. (sledgehammer999)</li>
<li>OTHER: Add new translators in the About page.</li>
</ul>
<h3>Thursday September 7th 2017 - qBittorrent v3.3.16 and 3.4.0beta2_20170709_cbfbae14090 release</h3>
<p>Since it was a month since the last stable and v3.4.0 seems to be delayed just a bit, it was a good time to backport critical fixes and do another v3.3.x release.<br>
Alongside v3.3.16 there is beta2 of v3.4.0. It contains various fixes for the things mentioned in the first beta plus a few new additions. See changelog. This beta works on Windows XP (32-bit) too. macOS packages are ready too.<br>
Finally, the future stable version will be <strong>v4.0.0 not v3.4.0</strong><br>
v3.3.16 changelog:</p>
<ul>
<li>BUGFIX: Better memory footprint when using libtorrent 1.1.x. The cache is turned off by default(<code>0 (disabled)</code> value in the settings). The value <code>-1 (auto)</code> makes it use 1/8 of your RAM. (sledgehammer999)</li>
<li>BUGFIX: Skip user input events when adding torrent. Closes #7327. (glassez)</li>
<li>BUGFIX: Avoid memory leak in the speed graph. (Chocobo1)</li>
<li>WEBUI: Fix validating wrong header field. X-Forwarded-Host is a foreign proxy setting, it isn't the same as qbt's local setting and thus it makes no sense to verify it. Closes #7311. (Chocobo1)</li>
<li>WINDOWS: Fix connection problems when a specific interface/ip is configured. (sledgehammer999)</li>
<li>WINDOWS: Disable skipping of loopback interfaces. This fixes the absence of VPN tunnel interfaces under Windows and works around the QTBUG-32349. Fixes #7291. (Evengard)</li>
<li>WINDOWS: The installer detects the 64bit running process too. (vlakoff)</li>
</ul>
<p>3.4.0beta2_20170709_cbfbae14090 changelog:</p>
<ul>
<li>FEATURE: Prefill torrent name when creating a new torrent. Closes #7229. (Chocobo1)</li>
<li>FEATURE: Expose more libtorrent options in advanced settings (Chocobo1)</li>
<li>BUGFIX: Fix explicit Torrent Management Mode in Add New Torrent dialog. Closes #5602. (sledgehammer999)</li>
<li>BUGFIX: Fix calculation of 'Average time in queue' stat under libtorrent 1.1.x (sledgehammer999)</li>
<li>BUGFIX: Don't disable bandwidth scheduler when manually switching speed limits. Closes #7306. (glassez)</li>
<li>COSMETIC: Remove indentation for category/tag filter widgets in all platforms (thalieht)</li>
<li>COSMETIC: Add space between widgets in left side panel. Closes #7224. (Chocobo1, glassez)</li>
<li>COSMETIC: Unify preference window borders across the tabs (vit9696)</li>
<li>WEBUI: Add option to rename torrent from WebUI (Thomas Piccirello)</li>
<li>WEBUI: Add auto torrent management to webui context menu (addresses #6815) (Thomas Piccirello)</li>
<li>WINDOWS: Use dpiawareness=1 on Windows. Closes #5393. (sledgehammer999)</li>
<li>MACOS: Fix macOS window restoration after using hide icon (vit9696)</li>
<li>MACOS: Fix notification display on macOS (vit9696)</li>
</ul>
<h3>Monday August 7th 2017 - qBittorrent v3.4.0beta_20170807_0320f9d5b5e release</h3>
<p>Windows packages for v3.4.0beta_20170807_0320f9d5b5e are released.<br>
macOS packages might follow.<br>
<strong>CAVEAT:</strong> The 32bit build doesn't work on Windows XP. Apparently the libtorrent 1.1.x series have dropped the support for that OS.<br>
Here is the current changelog:</p>
<ul>
<li>FEATURE: New icon theme with SVG source, so we can scale it appropriately in the future. (Bert Verhelst)</li>
<li>FEATURE: Drop Qt 4 support. Raise minimum Qt version to 5.5.1 (evsh)</li>
<li>FEATURE: UI for managing locally banned IP list (dzmat)</li>
<li>FEATURE: Support for specifying where to save/load config files. Support for portable mode. (evsh)</li>
<li>FEATURE: It is now possible to pass options via ENV variables instead of cmd options. (evsh)</li>
<li>FEATURE: Allow to strip subfolder in multifile torrents. (glassez, sledgehammer999)</li>
<li>FEATURE: Allow cmd args to specify options when adding torrents. (Brian Kendall)</li>
<li>FEATURE: Widget for showing filesystem paths while typing. Used in the Add New Torrent and Options dialogs. (evsh)</li>
<li>FEATURE: Trackerlist: Allow to toggle columns (thalieht)</li>
<li>FEATURE: Add availability column to torrent content model and torrent properties window (evsh)</li>
<li>FEATURE: Implemented share limit by seeding time (naikel)</li>
<li>FEATURE: Revamp Torrent creator (Chocobo1)</li>
<li>FEATURE: Enable drag n drop to create torrent on mainwindow (Chocobo1)</li>
<li>FEATURE: Add show/hide statusbar option (takiz)</li>
<li>FEATURE: Show number of pieces. Closes #6774. (Chocobo1)</li>
<li>FEATURE: Allow to select &amp; delete multiple entries in &quot;Manage Cookies&quot; dialog (Chocobo1)</li>
<li>FEATURE: Fetch Favicons via google as a final fallback (KingLucius)</li>
<li>FEATURE: Add a Tags (multi-label) feature to the GUI. Closes #13. (tgregerson)</li>
<li>FEATURE: Use the system icons for each file type in the Content tab (evsh)</li>
<li>FEATURE: Use SVG files for monochrome tray icons. Closes #6085. (evsh)</li>
<li>BUGFIX: Adjust icons names to better fit FDO scheme (evsh)</li>
<li>BUGFIX: Optimized IP filter parsing, making blazingly fast (sledgehammer999, evsh)</li>
<li>BUGFIX: Fix dialogs didn't position on the correct screen which qBittorrent window is on. Closes #1690, #2474, #3538. (Chocobo1)</li>
<li>BUGFIX: Refactor and improve StatusBar (glassez)</li>
<li>BUGFIX: Set expiration date for newly added cookie to +2 years from now, instead of +99 years. (Chocobo1)</li>
<li>BUGFIX: Don't create subfolder inside temp folder (glassez)</li>
<li>BUGFIX: Don't replace existing files when relocating torrent (glassez)</li>
<li>COSMETIC: Trackerlist: Set text alignment of columns with numbers to the right (thalieht)</li>
<li>COSMETIC: Enable alternatingRowColors for &quot;Manage Cookie&quot; dialog (Chocobo1)</li>
<li>WEBUI: Allow to load/use ECDSA certificate in webUI. (Chocobo1)</li>
<li>WEBUI: Add copy options to webui context menu (addresses #6815) (#7036) (Tom Piccirello)</li>
<li>WEBUI: Set torrent location from webui context menu (addresses #6815) (#7062) (Tom Piccirello)</li>
<li>SEARCH: Use explicit class for search plugin versions (evsh)</li>
<li>SEARCH: Remove all search plugins from repo. There is another repo named 'search-plugins'. (sledgehammer999)</li>
<li>SEARCH: Update the backend when a new plugin favicon is downloaded. (sledgehammer999)</li>
<li>RSS: Redesigned RSS subsystem (glassez)</li>
<li>RSS: Do not use hardcoded colors in RSS feed view (evsh)</li>
<li>WINDOWS: Installer detects running process when it is 64-bit (vlakoff)</li>
<li>MACOS: Various macOS UI improvements (vit9696)</li>
<li>MACOS: Fix main menu item location on macOS (vit9696)</li>
<li>OTHER: Use new classes/methods from libtorrent and stop using deprecate ones. (glassez)</li>
<li>OTHER: Various string fixes (Allan Nordhøy, sledgehammer999)</li>
</ul>
<h3>Thursday August 3rd 2017 - qBittorrent v3.3.15 release</h3>
<p>qBittorrent v3.3.15 was released. Very minor release to fix a possibly annoying problem.
3.4.0beta is being prepped and will be released this weekend. Stay tuned.</p>
<ul>
<li>BUGFIX: Temporary subfolder wasn't being deleted. (glassez)</li>
</ul>
<h3>Thursday July 20th 2017 - qBittorrent v3.3.14 release</h3>
<p>qBittorrent v3.3.14 was released.</p>
<ol>
<li>This release is made mainly to fix the previous problematic fix for Cross-Site Request Forgery attacks via the webui.</li>
<li>It also contains another Webui fix for a DNS rebinding attack. For all WebUI users, if your qBittorrent server is assigned with a domain name, it is recommended to enter the domain name in <code>GUI: Options -&gt; WebUI tab -&gt; Server domains textbox</code> or in <code>config: Preferences section -&gt; WebUI/ServerDomains</code> in order to defend against DNS rebinding attacks.</li>
<li>For macOS users: This is my first attempt to have a shortcut to <code>Applications</code> folder in the dmg. I hope that I didn't screw up the presentation.</li>
<li>Google has decided that qBittorrent is a persona non-grata. Read <a href="https://www.reddit.com/r/torrents/comments/6obxsa/google_bans_bittorrent/">this</a> reddit post for more info.</li>
<li>Either this weekend or the next one you will get a beta for v3.4.0. It has A LOT of new features so help in finding grave bugs. Keep checking back to see if it is posted.</li>
</ol>
<ul>
<li>BUGFIX: Set interface for outgoing traffic(libtorrent 1.1.x series). (evsh)</li>
<li>WEBUI: Fix KEEP_ALIVE_DURATION value (Chocobo1)</li>
<li>WEBUI: Relax CSRF defense. Closes #6882. Allow HTTP request which has neither Origin nor Referer header included. (Chocobo1)</li>
<li>WEBUI: Skip username/password check for active sessions (closes #6860) (Thomas Piccirello)</li>
<li>WEBUI: Fix javascript errors and follow best practices (Thomas Piccirello)</li>
<li>WEBUI: Fix value comparison. Closes #7081. (Chocobo1)</li>
<li>WEBUI: Avoid modifying request headers (Chocobo1)</li>
<li>WEBUI: Implement HTTP host header filtering. This filtering is required to defend against DNS rebinding attack. Fixes security issues reported by @beardog108 privately. (Chocobo1)</li>
<li>WEBUI: Add Status column to webui (addresses #6815) (#7032) (Tom Piccirello)</li>
<li>WEBUI: Bump API_VERSION and API_VERSION_MIN to 15.</li>
<li>SEARCH: Pad shorter python versions. Closes #6877. (sledgehammer999)</li>
<li>WINDOWS: Updated Arabic, Turkish, Greek, Russian, Danish languages of the installer. (KingLucius, BouRock, thalieht, Andrei Stepanov, scootergrisen)</li>
<li>WINDOWS: Raise total stack size on Windows to 8 MB. Closes #7021. (Chocobo1)</li>
<li>LINUX: Systemd service with user switch and other fixes/optimizations. (anton.latukha)</li>
</ul>
<h3>Thursday June 1st 2017 - qBittorrent v3.3.13 release</h3>
<p>qBittorrent v3.3.13 was released. This release is made mainly to fix possible Cross-Site Request Forgery attacks via the webui reported by OpenGG and fixed by Chocobo1.</p>
<ul>
<li>BUGFIX: Fixed UI glitch about torrent numbers in the sidepanel. Fixes #6454. (evsh)</li>
<li>BUGFIX: Fix downloaded/uploaded columns were not highlighted properly when selected. (Chocobo1)</li>
<li>BUGFIX: Always draw background in files list and search result list (Chocobo1)</li>
<li>BUGFIX: Remove torrent temp folder if it becomes unneeded (glassez)</li>
<li>BUGFIX: Remove torrent temp folder when torrent is deleted (glassez)</li>
<li>BUGFIX: Setup DPI at startup (Chocobo1)</li>
<li>BUGFIX: Do not attempt to show detailed tooltips without torrent metadata. Closes #6768. (evsh)</li>
<li>BUGFIX: Better detection of already present files when adding a torrent. (fbriere)</li>
<li>BUGFIX: Fix double click on system tray icon causing program to open and minimize immediately. Closes #5826. (Chocobo1)</li>
<li>BUGIFX: Fix categories sorting in AddNewTorrentDialog. Partially fixes #6708. (fbriere)</li>
<li>BUGFIX: Set &quot;category&quot; column as case-insensitive in transfer list. (fbriere)</li>
<li>BUGFIX: Properly sort categories case-insensitively in filter widget. Closes #6708. (fbriere)</li>
<li>BUGFIX: Fix renaming files is not case sensitive on Windows platform. Closes #5128. (Chocobo1)</li>
<li>BUGFIX: Fix crash in download piece bar (evsh)</li>
<li>BUGFIX: Fix focusing on the previously opened dialog didn't work (Chocobo1)</li>
<li>WEBUI: Bugfix: <code>RequestParser::splitMultipartData</code> drop extra trailing newline. (OpenGG)</li>
<li>WEBUI: Add <code>skip_checking</code> and <code>paused</code> to <code>/command/download</code> and <code>/command/upload</code> (OpenGG)</li>
<li>WEBUI: Fix checkbox hidden. Closes #6642. (Chocobo1)</li>
<li>WEBUI: Implement http persistence connection. Max simultaneous connection limit set to 500. This also release allocated memory of Connection instances at runtime instead of at program shutdown. (Chocobo1)</li>
<li>WEBUI: Always send Content-Length header. (Chocobo1)</li>
<li>WEBUI: Send Date http header (Chocobo1)</li>
<li>WEBUI: Fix &quot;Content-Encoding&quot; header is always created. (Chocobo1)</li>
<li>WEBUI: Implement robust checking for gzip encoding and revise gzip compressing/decompressing code. (Chocobo1)</li>
<li>WEBUI: Make the context obligatory for translatable strings. Also delete duplicate strings from extra translations. (sledgehammer999)</li>
<li>WEBUI: Use translatable strings in Statistics dialog. (sledgehammer999)</li>
<li>WEBUI: Add missing unit sizes in misc.js (sledgehammer999)</li>
<li>WEBUI: Use the same layout in the Speed tab in preferences as the GUI. (sledgehammer999)</li>
<li>WEBUI: Return status indicating if at least one torrent was successfully added (Thomas Piccirello)</li>
<li>WEBUI: Increase the number of digits after the decimal point (thalieht)</li>
<li>WEBUI: Use less permissive Content Security Policy (Thomas Piccirello)</li>
<li>WEBUI: Fix connection status icon too large. Closes #6804. (Chocobo1)</li>
<li>WEBUI: Cosmetic fixes for WebUI upload and download windows (naikel)</li>
<li>WEBUI: Fix slow filtering in WebUI. (naikel)</li>
<li>WEBUI: Make cookie parsing robust (Chocobo1)</li>
<li>WEBUI: New API for getting torrent piece info (Chocobo1)</li>
<li>WEBUI: Implement Cross-Site Request Forgery defense. Due to this the HTTP <code>referer</code> header is now expected in (almost) all HTTP requests. qBittorrent will drop the request sent without the <code>referer</code> header. That's why we bump the <code>API_VERSION_MIN</code> too. (reported by OpenGG, fixed by Chocobo1)</li>
<li>SEARCH: Update demonoid, legittorrents plugins (ngosang)</li>
<li>SEARCH: Remove mininova, ExtraTorrent plugins (ngosang, KingLucius)</li>
<li>SEARCH: Add btdb plugin (ngosang)</li>
<li>WINDOWS: Updated Spanish, Ukrainian, German, Chinese languages of the installer. (ngosang, evsh, schnurlos, wevsty)</li>
<li>LINUX: Rename .desktop and appdata files to match executable name. Fixes #6625. (evsh)</li>
<li>MACOS: Fix UI responsiveness after AddNewTorrentDialog received metadata. (Brian Kendall)</li>
</ul>
<h3>Thursday April 6th 2017 - qBittorrent v3.3.12 release</h3>
<p>qBittorrent v3.3.12 was released. This a bugfix release not a major one.</p>
<ul>
<li>FEATURE: Indicate bitness in stackstrace and about dialog. Closes #6172. (sledgehammer999)</li>
<li>BUGFIX: Fix incomplete type compile error with Qt4 (Chocobo1)</li>
<li>BUGFIX: Fix compile error: ‘escape’ is not a member of ‘Qt’ (Chocobo1)</li>
<li>BUGFIX: Use system locale to format dates/time/etc (sledgehammer999)</li>
<li>BUGFIX: Follow http user-agent format (Chocobo1)</li>
<li>BUGFIX: Fix cancel &quot;Set location&quot; causes files move to installation dir. (Chocobo1)</li>
<li>WEBUI: Improve performance of updating 'progress' column (buinsky)</li>
<li>WEBUI: Implement statistics window in web UI (FranciscoPombal)</li>
<li>WEBUI: fixed &quot;remaining&quot; column in WebUI (FranciscoPombal)</li>
<li>WEBUI: Set HttpOnly attribute to SID cookie (Chocobo1)</li>
<li>WEBUI: Fire up the timer to clean inactive sessions (Chocobo1)</li>
<li>WEBUI: Set cookie SID value to empty on logout (Chocobo1)</li>
<li>WINDOWS: Make the installer DPI aware (regs01)</li>
<li>WINDOWS: Set exit code to 0 on install/uninstall success. Fixes problem with silent installations. (Chocobo1)</li>
<li>WINDOWS: The 64-bit installer refuses to install on 32-bit systems. (sledgehammer999)</li>
<li>WINDOWS: The 64-bit installer uses the correct &quot;Program Files&quot; now. Detection will not work if you install on top of previous installer. (sledgehammer999)</li>
<li>WINDOWS: Fix running the uninstaller if the user chose a different path in the installer. Closes #6080. (sledgehammer999)</li>
<li>LINUX: Add keywords to the .desktop file. (sledgehammer999)</li>
<li>LINUX: Update stuff in appdata.xml and run 'appstream-utl upgrade' on it. (sledgehammer999)</li>
<li>OTHER: Replace rand() by a true uniform distribution generator (Chocobo1)</li>
<li>OTHER: Change our user-agent format as indicated earlier in the news section (Chocobo1)</li>
<li>OTHER: cmake: fix OSX bundle creation (evsh)</li>
</ul>
<h3>Tuesday March 7th 2017 - NOTICE to tracker operators: User agent change</h3>
<p>Starting from the next version (v3.3.12) qBittorrent will use the following user-agent format:</p>
<pre><code>qBittorrent/A.B.C.DE
</code></pre>
<p><code>A</code>, <code>B</code>, <code>C</code> and <code>D</code> are numbers indicating <code>VERSION_MAJOR</code>, <code>VERSION_MINOR</code>, <code>VERSION_BUGFIX</code> and <code>VERSION_BUILD</code> respectively.<br/>
If <code>D</code> is zero it will be omitted. The 3rd dot(<code>.</code>) will be omitted in this case.<br/>
<code>A</code>, <code>B</code> and <code>C</code> will always be present.<br/>
<code>E</code> is a string and possible values of it are <code>alpha</code>, <code>beta</code> and <code>rc</code>. They might not appear in all lowercase. Also they might appear numbered eg <code>alpha2</code>.<br/>
If <code>E</code> is empty it will be omitted. This indicates a stable release.<br/>
There is no connection between <code>D</code> and <code>E</code>. One might be present even if the other isn't.
To sum up and give an example, the user agent that v3.3.12 will use is <code>qBittorrent/3.3.12</code>.</p>
<h3>Monday March 6th 2017 - &quot;qBittorrent is the best BitTorrent client&quot;: a guide by TurboLab.it</h3>
<p>The Italian techzine <em>TurboLab.it</em> published a new long-form BitTorrent tutorial titled <a href="https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669">La Grande Guida a BitTorrent</a> (literally: <em>The big guide to BitTorrent</em>). <strong>The author recommends <em>qBittorrent</em> as &quot;the best BitTorrent client for Windows&quot;</strong>, citing the lightweight footprint, the no-crapware bundled installer and the clean interface among the top reasons for his choice.<br/>
Those who understand Italian can read the full guide here: <a href="https://turbolab.it/bittorrent-973/grande-guida-bittorrent-669">La Grande Guida a BitTorrent</a>.<br/>
TurboLab.it team welcomes hints, tips and tricks to make the guide even better: comments can be left using the guide own commenting system (free registration required).</p>
<h3>Friday March 3rd 2017 - qBittorrent v3.3.11 release</h3>
<p>qBittorrent v3.3.11 was released. There are a few WebUI security fixes.<br/>
This will be the last release in the v3.3.x series. Next release will have a new icon theme(at least) and will drop Qt4 support. Also Qt 5.7.1 seems to be the last release supporting Windows XP. It is unknown how long I am going to still support it.</p>
<ul>
<li>FEATURE: Always show progress and remaining bytes for unselected files. (sledgehammer999)</li>
<li>FEATURE: Allow to change priority for unselected files through the combobox like it is done via the context menu. (sledgehammer999)</li>
<li>FEATURE: Remove settings to exchange trackers. It wasn't used by non-libtorrent clients. Also it has a privacy risk and you might be DDoSing someone. (sledgehammer999)</li>
<li>FEATURE: Put temp files in .qBittorrent directory. Closes #4462. (Chocobo1)</li>
<li>FEATURE: Use the numbers from tracker scrape response. Closes #5048, #6117. (Chocobo1)</li>
<li>FEATURE: Implement category filter widget. Show categories in tree mode when subcategories are enabled. (glassez)</li>
<li>FEATURE: Allow to toggle columns in searchtab (thalieht)</li>
<li>FEATURE: PeerList: allow to hide zero values for the &quot;uploaded&quot; and &quot;downloaded&quot; columns (thalieht)</li>
<li>FEATURE: Display more information in tracker tab (ngosang)</li>
<li>FEATURE: Use Ctrl+F to search torrents. Closes #5797. (Tim Delaney)</li>
<li>FEATURE: Transferlist: add hotkeys for double click and recheck selected torrents (thalieht)</li>
<li>FEATURE: Add hotkey for execution log tab, Trackerlist, Peerlist etc (thalieht)</li>
<li>FEATURE: Separate seeds from peers for DHT, PeX and LSD (thalieht)</li>
<li>BUGFIX: Do not remove added files unconditionally. Closes #6248 (Eugene Shalygin)</li>
<li>BUGFIX: Ignore mouse wheel events in Advanced Settings. Closes #866. (Chocobo1)</li>
<li>BUGFIX: Add queue repair code. It should fix missing torrents after restarting. (Eugene Shalygin, nxd4)</li>
<li>BUGFIX: Fetch torrent status when generating final fastresume data. It should fix missing torrents after restarting. (Eugene Shalygin)</li>
<li>BUGFIX: Fix queue overload for add torrent at session start. It should fix missing torrents after restarting. (falco)</li>
<li>BUGFIX: After files relocate, don't remove the old folder even if it is empty. (Chocobo1)</li>
<li>BUGFIX: Fix finding 'English' item in language dropdown menu when an unrecognized locale is requested. Closes #6109. (sledgehammer999)</li>
<li>BUGIFX: Speedlimitdlg: raise slider default value to 10000. Closes #6150. (Chocobo1)</li>
<li>BUGFIX: TransferListWidget: keep columns width even if they are hidden on qBittorrent startup (unless something goes wrong) (thalieht)</li>
<li>BUGFIX: fix index overflow for torrents with invalid meta data or empty progress (Falco)</li>
<li>BUGFIX: Immediately update torrent_status after manipulating super seeding mode. Partially fixes #6072. (sledgehammer999)</li>
<li>BUGFIX: Use case-insensitive comparison for torrent content window. Closes #6327. (Chocobo1)</li>
<li>BUGFIX: Fixed sort order for datetime columns with empty values (closes #2988) (Vladimir Sinenko)</li>
<li>BUGFIX: Disable proxy in WebUI HTTP server. Closes #6349. (Eugene Shalygin)</li>
<li>COSMETIC: Use a disabled progressbar's palette for unselected files. (sledgehammer999)</li>
<li>COSMETIC: Support fallback when selecting theme icons (Eugene Shalygin)</li>
<li>COSMETIC: Do not resize SVG icons (Eugene Shalygin)</li>
<li>COSMETIC: Align text to the right in columns that handle numbers for PeerList and SearchTab (thalieht)</li>
<li>COSMETIC: Increased number of digits after the decimal point for Gibibytes and above (thalieht)</li>
<li>COSMETIC: Use non-breaking spaces between numbers and units (thalieht)</li>
<li>WEBUI: Fix proxy type bug (Oke Atime)</li>
<li>WEBUI: Use the correct value for KEY_TORRENT_NUM_COMPLETE/KEY_TORRENT_NUM_INCOMPLETE (Chocobo1)</li>
<li>WEBUI: Make torrents table scrollable horizontally (buinsky)</li>
<li>WEBUI: Make torrent peers table scrollable horizontally (buinsky)</li>
<li>WEBUI: Add tooltips to dynamic table header (buinsky)</li>
<li>WEBUI: Implement dynamic table columns resizing, reordering and hiding (buinsky)</li>
<li>WEBUI: Add some missing columns to dynamic tables (buinsky)</li>
<li>WEBUI: Make too tall menus scrollable (buinksy)</li>
<li>WEBUI: Prevent text wrapping in menus (buinsky)</li>
<li>WEBUI: Add a vertical separator between columns (buinsky)</li>
<li>WEBUI: Implement resizable progress bar in &quot;Done&quot; column (buinsky)</li>
<li>WEBUI: Fix scrollbar covers menu item with long text (buinsky)</li>
<li>WEBUI: Remove 300px limit of column width (buinsky)</li>
<li>WEBUI: Avoid lags in firefox on resizing progress column (buinsky)</li>
<li>WEBUI: Fix category in torrent upload. Closes #6260 (ngosang)</li>
<li>WEBUI: Turn off port forwarding of WebUI by default for GUI users (Chocobo1)</li>
<li>WEBUI: Exclude insecure ciphers. Fixes security issues reported by @beardog108 privately. (Chocobo1)</li>
<li>WEBUI: Avoid clickjacking attacks. Fixes security issues reported by @beardog108 privately. (ngosang)</li>
<li>WEBUI: Add X-XSS-Protection, X-Content-Type-Options, CSP header. Fixes security issues reported by @beardog108 privately. (Chocobo1)</li>
<li>WEBUI: Escape various values that might contain injected html. Fixes security issues reported by @beardog108 privately. (Chocobo1)</li>
<li>WEBUI: Bump API_VERSION to 12.</li>
<li>SEARCH: Update extratorrent plugin. Closes #6261 (ngosang)</li>
<li>SEARCH: SearchTab: can now save sorting column changes (thalieht)</li>
<li>SEARCH: Use case-insensitive sort for Name column in Search tab. Closes #407. (Chocobo1)</li>
<li>RSS: Fix tab order in RSS downloader. Closes #6164. (Tim Delaney)</li>
<li>RSS: Move old RSS items to separate config file. Closes #6167. (Tim Delaney)</li>
<li>RSS: Episode filter code refactoring (Tim Delaney)</li>
<li>RSS: Allow resetting rule to no category. Closes #5539. (Tim Delaney)</li>
<li>RSS: Save rule on enable/disable even if not selected. Closes #6163. (Tim Delaney)</li>
<li>RSS: Allow | in RSS must contain. Closes #6171. (Tim Delaney)</li>
<li>RSS: RSS use red text to indicate invalid filter. Closes #6165. (Tim Delaney)</li>
<li>RSS: Allow episode zero (special) and leading zeroes in RSS episode filter. (Tim Delaney)</li>
<li>RSS: RSS parse torrent episodes like 1x01 as well as S01E01. Closes #2749. (Tim Delaney)</li>
<li>RSS: RSS allow infinite range to extend beyond current season. Closes #800, #3876, #6170. (Tim Delaney)</li>
<li>RSS: Improve UI responsiveness during RSS downloading. Closes #873, #1089, #1235, #5423. (Tim Delaney)</li>
<li>RSS: Show name of feed list and sort rules in editor. Closes #3782, #6281. (Tim Delaney)</li>
<li>RSS: Fix regex matching. Closes #6337. (Tim Delaney)</li>
<li>MACOS: Fix qbittorrent-nox build (Oke Atime)</li>
<li>LINUX: fixes default indicator name (Bilal Elmoussaoui)</li>
<li>OTHER: Workaround problem with moc from Qt4 and #if (Eugene Shalygin)</li>
<li>OTHER: Print warning to the user if stacktrace contains no function names (Eugene Shalygin)</li>
<li>OTHER: Various cmake fixes (Eugene Shalygin)</li>
<li>OTHER: Fix finding qmake in configure when cross-compiling (Zach Bacon)</li>
</ul>
<h3>Tuesday December 27th 2016 - SSL support</h3>
<p>Now the mainsite is served over HTTPS. Thanks to <a href="https://letsencrypt.org/">Let's Encrypt</a> and to shiki (forum admin).<br>
Also the mainsite is available as a git repo now for (almost) anyone to hack, fix bugs and maybe <a href="https://github.com/qbittorrent/qBittorrrent-website/issues/5">redesign</a>. Look <a href="https://github.com/qbittorrent/qBittorrrent-website">here</a>.</p>

<h3>Saturday December 17th 2016 - qBittorrent v3.3.10 release</h3>
<p>qBittorrent v3.3.10 was released containing hotfixes. Windows users: There is an installer for 64-bit qbittorrent. However, you <b>might</b> experience increased memory usage due to this.
<br><b>NOTICE TO PACKAGERS:</b> Read 3.3.8 news and changelog too.</p>
<ul>
<li>BUGFIX: Fix share ratio limiting. Broken by commit 259b5e51c49b744. Closes #6039 #6048. (sledgehammer999)</li>
<li>BUGFIX: Case insensitive sort for client column. Closes #6054. (Oke Atime)</li>
<li>BUGFIX: Make resume/pause menu items clickable. Closes #6040. (Oke Atime)</li>
<li>WINDOWS: Make the updater to look for the x64 installer if running x64 version. (sledgehammer999)</li>
</ul>

<h3>Wednesday December 14th 2016 - qBittorrent v3.3.9 release</h3>
<p>qBittorrent v3.3.9 was released containing hotfixes.<br><b>NOTICE TO PACKAGERS:</b> Read 3.3.8 news and changelog too.</p>
<ul>
<li>BUGFIX: Fix slider for per torrent speed limits when no global speed limit has been set. Closes #6046. (sledgehammer999)</li>
<li>BUGFIX: Fix GUI for proxy settings. Closes #6045. (sledgehammer999)</li>
<li>OSX: Correctly migrate settings/rss/usage stats in macOS. Closes #6041. (sledgehammer999)</li>
</ul>

<h3>Wednesday December 14th 2016 - qBittorrent v3.3.8 release</h3>
<p>qBittorrent v3.3.8 was released.<br><b>NOTICE TO PACKAGERS:</b> Libtorrent 1.1.x series isn't officially supported yet. This qBittorent release uses API of 1.1.x that hasn't been released yet. It is in their git branch for now. Wait for 1.1.2 release, or build from RC_1_1 branch, or build against the 1.0.x series.</p>
<ul>
<li>FEATURE: Start using new libtorrent 1.1.x APIs (needs at least 1.1.2). Still unofficial support. (glassez, sledgehammer999)</li>
<li>FEATURE: Add a new DHT bootstrap node run by libtorrent author arvidn. (sledgehammer999)</li>
<li>FEATURE: Option to disable tracker's favicon download. (sledgehammer999)</li>
<li>FEATURE: Shift + scroll = horizontal scroll. Closes #5980. Only for TransferListWidget, PeerListWidget. (Chocobo1)</li>
<li>BUGFIX: Actually set new path as default when checkBox is enabled in Add New Torrent dialog. (erikssm)</li>
<li>BUGFIX: Properly fix the handling of default save path store/load. (sledgehammer999)</li>
<li>BUGFIX: Fix crash when restoring from tray. Closes #5854. (Chocobo1)</li>
<li>BUGFIX: Export torrents added only after the setting was enabled. (sledgehammer999)</li>
<li>BUGFIX: Delete old rss favicon before assigning new one. (sledgehammer999)</li>
<li>BUGFIX: Don't revert save path value in the Dialog when metadata are received. Closes #5482. (sledgehammer999)</li>
<li>BUGFIX: Don't ever stop seeding forced torrents. Closes #5784. (sledgehammer999)</li>
<li>BUGFIX: Fix potential crash in TransferList widget. Closes #5873. (Chocobo1)</li>
<li>BUGFIX: Sort torrent names case insensitively. (Yez Ezey)</li>
<li>BUGFIX: Fix mistake in getting values for sorting in TransferList widget. (Anton Lashkov)</li>
<li>BUGFIX: Fix memory leaks. (dzmat, Chocobo1)</li>
<li>WEBUI: Fix webui port overflow. (thalieht)</li>
<li>WEBUI: Changed meaning of the value of the 'dl_limit', 'up_limit', 'alt_dl_limit' and 'alt_up_limit' tokens. The value is expressed in bytes and not in KiB. (sledgehammer999)</li>
<li>WEBUI: Don't request client SSL certificate. Closes #3883. (borouhin)</li>
<li>WEBUI: Bump API_VERSION and API_VERSION_MIN to 11.</li>
<li>SEARCH: Fixed extratorrent search not working Closes #5736 #5753. (Yez Ezey)</li>
<li>SEARCH: Update Demonoid plugin. (ngosang)</li>
<li>SEARCH: Remove TorrentReactor plugin. (ngosang)</li>
<li>SEARCH: Fix python auto install, deletion of installer and use 3.5.x series for Vista+. Closes #5871. (sledgehammer999)</li>
<li>SEARCH: Set /usr/local/bin before default PATH on macOS. closes #5639 #5571. This enables finding newer python installs. (Yez Ezey)</li>
<li>COSMETIC: Log: set embedded Tracker [OFF] msg type as info. (thalieht)</li>
<li>COSMETIC: Remove (mostly) useless log warnings about tracker's favicon. (sledgehammer999)</li>
<li>COSMETIC: Change RSS view layout to horizontal. Closes #5920. (Chocobo1)</li>
<li>OSX: Fix crash on exit using Qt4. (Yez Ezey)</li>
<li>OSX: Change QSettings to IniFormat on macOS. Closes #5770 #5808. (Yez Ezey)</li>
<li>LINUX: Workaround a Qt5 bug which results in a flood of network interface change signals. (Eugene Shalygin)</li>
<li>OTHER: Turkish translation for installer. (Burak Yavuz)</li>
<li>OTHER: Update portugueseBR for installer. (DaRKSoM)</li>
<li>OTHER: Update portuguese for installer. (EdwardLinux)</li>
<li>OTHER: Add --disable-qt-dbus to configure if $host_os is macOS. (Yez Ezey)</li>
<li>OTHER: New translations: Icelandic, Latvian, Malay, Occitan, Uzbek.</li>
<li>OTHER: A whole lot of code refactoring by various people.</li>
</ul>

<h3>Sunday September 11th 2016 - qBittorrent v3.3.7 release</h3>
<p>qBittorrent v3.3.7 was released. Minor bugfixes of v3.3.6. Mac OS X builds will be delayed a little bit because Qt 5.6.1 doesn't play nice and I'll need to rebuild 5.6.0.</p>
<ul>
<li>FEATURE: Delete torrent+files with Shift+Delete (pieniacy)</li>
<li>BUGFIX: Fix 6-hour speedplot point push rate. Close #5545 (Daniel Segesdi)</li>
<li>BUGFIX: Avoid spawning a new explorer.exe process when selecting "Open containing folder". Closes #5564. (Chocobo1)</li>
<li>BUGFIX: Fix loading of new geoip db due to an artificial size limit. (SagePtr)</li>
<li>BUGFIX: Better error handling and logging with smtp communication. (Brian Kendall)</li>
<li>SEARCH: Remove KickassTorrents search engine (ngosang)</li>
<li>SEARCH: Remove BTDigg search engine (ngosang)</li>
<li>SEARCH: Update Torrentz search engine (ngosang)</li>
</ul>

<h3>Wednesday July 20th 2016 - qBittorrent v3.3.6 release</h3>
<p>qBittorrent v3.3.6 was released. Minor bugfixes of v3.3.5. It also fixes crashes on launch for some Windows setups. It is a libtorrent problem. On Windows it uses libtorrent 1.0.9+git f716aef5 with commit 45cff5837f7b4af reverted as this one is causing the crashes. Investigation is ongoing. Mac OS X builds are ready too. Ubuntu PPA will follow.</p>
<ul>
<li>BUGFIX: Do not create save folder in advance (glassez)</li>
<li>BUGFIX: Fix upper-bound limit of command line for "Run External Program" in Windows. Closes #5399. (Chocobo1)</li>
<li>BUGFIX: Invoke system's cmd.exe directly. (Chocobo1)</li>
<li>BUGFIX: Workaround space issues in file path for running external program on Windows. (Chocobo1)</li>
<li>BUGFIX: Fix icons are missing when using RTL languages in Options dialog. Closes #5398. (Chocobo1)</li>
</ul>

<h3>Monday June 20th 2016 - qBittorrent v3.3.5 release</h3>
<p>qBittorrent v3.3.5 was released.</p>
<ul>
<li>FEATURE: Implement Torrent Management Mode(TMM) (glassez)</li>
<li>FEATURE: New cookies management dialog and various related fixes (glassez)</li>
<li>FEATURE: Use unique temp directories (temp_path/&lt;truncated_torrent_hash&gt;). Closes #5154. (glassez)</li>
<li>FEATURE: Display notifications when a torrent is added. Closes #334 and #915. (sledgehammer999)</li>
<li>FEATURE: Sort labels with natural sort algorithm in the right-click menu. Closes #3919. (Chocobo1)</li>
<li>FEATURE: Add option to automatically remove .torrent files upon adding (Eugene Shalygin)</li>
<li>FEATURE: Add option to bind directly to an IP instead of using a network Interface (Sjoerd van der Berg, sledgehammer999)</li>
<li>FEATURE: Detailed tooltips on the progress and availability bars in the General button of each torrent. (Eugene Shalygin)</li>
<li>FEATURE: Let user able to specify a filter when choosing an IP filter file (Chocobo1)</li>
<li>FEATURE: Improve usability of "Run External Program". Users can write (platform dependent) shell scripts now. (Chocobo1)</li>
<li>PERFORMANCE: Optimize drawing in speed graph (Anton Lashkov, Chocobo1)</li>
<li>BUGFIX: Fix memory leak. (sledgehammer999)</li>
<li>BUGFIX: Fix resizing bug in "add torrent dialog". Closes #5036. (Chocobo1)</li>
<li>BUGFIX: Fix qBittorrent doesn't exit immediately when "all downloads are done -> exit" option enabled. (glassez, Chocobo1)</li>
<li>BUGFIX: Display the filepath when a torrent fails to load. Closes #100 and #805. (sledgehammer999)</li>
<li>BUGFIX: Fix Add tracker dialog empty trackers (ngosang)</li>
<li>BUGFIX: Fix Add tracker dialog URL download (ngosang)</li>
<li>BUGFIX: Fix torrent adding with existing data (glassez)</li>
<li>BUGFIX: Try to find incomplete files for new torrent (glassez)</li>
<li>BUGFIX: Fix rechecking after torrent is finished (glassez)</li>
<li>BUGFIX: Fix duplicate network interfaces. Closes #5131 (ngosang)</li>
<li>BUGFIX: Fix .!qB extension is added when disabled (glassez)</li>
<li>BUGFIX: Fix "IP Filtering - Apply to trackers" wasn't being applied. Closes #5217. (Chocobo1)</li>
<li>BUGFIX: Don't resize the Country column needlessly (thalieht)</li>
<li>BUGFIX: Fix crashing when exiting the program while the Options window was showing. Closes #4871, #5049. (Chocobo1)</li>
<li>BUGFIX: Fix parsing of eMule .DAT filters. Closes #5281. (thalieht, sledgehammer999)</li>
<li>WEBUI: Implement in setting/removing/showing categories. (buinsky)</li>
<li>WEBUI: Add 'Added on' column in Webui. Closes #5145,#1092,#738 (Ibrahim Tachijian)</li>
<li>WEBUI: Add command to get the logs (pmzqla)</li>
<li>WEBUI: Expose Add trackers feature (pmzqla)</li>
<li>WEBUI: Bump API_VERSION and API_VERSION_MIN to 10. (sledgehammer999)</li>
<li>SEARCH: Implement search filters in the proxy model. (Eugene Shalygin)</li>
<li>SEARCH: Optimize widgets inside of the search tab (Eugene Shalygin)</li>
<li>SEARCH: Remove duplicated code from search tab and widget (Eugene Shalygin)</li>
<li>SEARCH: Use nova2dl.py script instead of DownloadManager. Closes #5026. (glassez)</li>
<li>SEARCH: Various UI cleanups and optimizations. (Chocobo1, ngosang)</li>
<li>SEARCH: Fix Torrentz, Mininova, LegitTorrents, PirateBay plugins (ngosang)</li>
<li>SEARCH: Fix toolbar resizing when m_searchFilter appears/disappears. Closes #5120. (Chocobo1)</li>
<li>SEARCH: Use QPalette::LinkVisited color for downloaded items in search results (Eugene Shalygin)</li>
<li>SEARCH: Update Python version requirements (min 2.7.9 / 3.3.0) (ngosang)</li>
<li>SEARCH: Remove filters from Torrentreactor, BTDigg and Demonoid. It is done in the GUI now. (ngosang)</li>
<li>RSS: default refresh interval to 30 mins (botmtl)</li>
<li>COSMETIC: Improve TransferListDelegate::sizeHint (Chocobo1)</li>
<li>COSMETIC: Fix long text clipping. Closes #5091. (Chocobo1)</li>
<li>COSMETIC: Minor change in Stats dialog (ngosang)</li>
<li>COSMETIC: Fix Update all button height in RSS tab (ngosang)</li>
<li>COSMETIC: Disable `comboHideZero` when `checkHideZero` is unchecked. (Chocobo1)</li>
<li>COSMETIC: Disable `checkLimituTPConnections` when `checkuTP` is unchecked. (Chocobo1)</li>
<li>COSMETIC: Enable word wrap for "Run external program" help text (Chocobo1)</li>
<li>COSMETIC: Fix mutually exclusive radio buttons can be unselected. (Chocobo1)</li>
<li>COSMETIC: Set About tab font-size to default (zywo)</li>
<li>COSMETIC: Improve wordings in "Auto download torrent" section (Chocobo1)</li>
<li>COSMETIC: Change "Auto download torrent" default save path to "default location". (Chocobo1)</li>
<li>COSMETIC: Change ambiguous text "Copy selected" to "Copy IP:port" (Chocobo1)</li>
<li>COSMETIC: Improve error messages for "Auto download torrents" (Chocobo1)</li>
<li>COSMETIC: Slim down 'Downloads' page of options window. (sledgehammer999)</li>
<li>COSMETIC: Cleanup Connection page in Option dialog. Closes #845. (Chocobo1)</li>
<li>COSMETIC: Fix reload button size is not the same size as "..." button in options dialog. (Chocobo1)</li>
<li>WINDOWS: Let Windows handle all widgets scaling. (Chocobo1)</li>
<li>WINDOWS: Improve stack trace for windows by including source filenames and line numbers (SeigneurSerpent)</li>
<li>OSX: Fix qt5 bundle on OSX. Closes #4014. (sledgehammer999)</li>
<li>OTHER: Make AddNewTorrentDialog behavior uniform (glassez)</li>
<li>OTHER: Optimize the shutdown dialog (Chocobo1)</li>
<li>OTHER: Enable access to shutdown functions when configured with `--disable-gui` option (Chocobo1)</li>
<li>OTHER: Delete Import Torrent Dialog. Just use the "add new torrent" dialog. (glassez)</li>
<li>OTHER: Optimize code for natural sorting (Chocobo1)</li>
<li>OTHER: Use new alert dispatching API for libtorrent 1.1.x (glassez)</li>
<li>OTHER: Fix gcc 6 compilation with qmake. See #5237. (sledgehammer999)</li>
</ul>

<h3>Tuesday March 29th 2016 - qBittorrent v3.3.4 release</h3>
<p>qBittorrent v3.3.4 was released after a long time with huge changelog.<br/>The Windows binary is compiled using Qt 5.6. You'll see a graphic glitch when hovering over the "plus" sign in the content tree. It is a known problem but Qt 5.6 brings fixes that justify using it despite the graphic glitch.</p>
<ul>
<li>FEATURE: Download more pieces in "Download first and last pieces first" feature (ngosang)</li>
<li>FEATURE: Unlock first column in peerlist too (thalieht)</li>
<li>FEATURE: Add "Hide zero values" option. Closes #3543. (Chocobo1)</li>
<li>FEATURE: Add a "remaining" column to the torrent content model (Ben Lau)</li>
<li>FEATURE: Allow to toggle columns in peerlist (thalieht)</li>
<li>FEATURE: Add ability to filter log messages by type. (sledgehammer999)</li>
<li>FEATURE: Add ability to write the log to file. (sledgehammer999)</li>
<li>FEATURE: Add 'never show again' checkbox/pref to auto-exit confirm dialog (d3fault, sledgehammer999, Chocobo1)</li>
<li>PERFORMANCE: Perform fastresume data saving in separate thread (glassez)</li>
<li>PERFORMANCE: Optimize session startup (glassez)</li>
<li>BUGFIX: Save resume data using QSaveFile (Qt5 only). This reduces chances of corrupt files. (glassez)</li>
<li>BUGFIX: Check torrent file permissions before opening (birdie-github)</li>
<li>BUGFIX: Always update native session's announce_ip setting (Jesse Connop)</li>
<li>BUGFIX: Fix loading *.magnet files from watched folders. Closes #4701. (sledgehammer999)</li>
<li>BUGFIX: Fix upgrade corrupted fastresume file (glassez)</li>
<li>BUGFIX: Fix total values for "Seeds" & "Peers" (Chocobo1)</li>
<li>BUGFIX: Fix potential race condition. Closes #4742. (Chocobo1)</li>
<li>BUGFIX: Don't merge trackers for private torrents. Closes #2928. (sledgehammer999)</li>
<li>BUGFIX: Fix double buttons in "Add New Torrent" dialog. (Chocobo1)</li>
<li>BUGFIX: Fix malformed date header in email. Closes #4828. (Chocobo1)</li>
<li>BUGFIX: Save "Run external program" input as is. Closes #4830. (Chocobo1)</li>
<li>BUGFIX: Enable "filename" column in peers list again. Crash is fixed now. (Eugene Shalygin)</li>
<li>BUGFIX: Don't display warning when folder name stayed the same after rename. (sledgehammer999)</li>
<li>BUGFIX: Fix selection of Portuguese translation files. (sledgehammer999)</li>
<li>BUGFIX: Fix selection of Esperanto locale. Closes #4999. (sledgehammer999)</li>
<li>BUGFIX: Fix "caja" file manager opens the file instead of opens the directory. Closes #5003. (Chocobo1)</li>
<li>BUGFIX: Fix periodic latency spikes on Windows with WiFi connections. Closes #4209. (sledgehammer999)</li>
<li>BUGFIX: Potentially fix a random crash coming from the sidepanel (sledgehammer999, ngosang)</li>
<li>WEBUI: Fix max_ratio precision. Closes #4707 (ngosang)</li>
<li>WEBUI: Fix JavaScript exception on WebUI load (buinsky)</li>
<li>WEBUI: Fix translation (buinsky)</li>
<li>WEBUI: Submit the label in the new label dialog on pressing enter key (buinsky)</li>
<li>WEBUI: Check WebUI username and password length. Closes #4191 (ngosang)</li>
<li>WEBUI: Minor changes in CSS styles (ngosang)</li>
<li>WEBUI: Add "Added on" and "Completion on" fields to query/torrents query response (buinsky)</li>
<li>WEBUI: Do not try to parse request message when content-length is 0 (Dan Seminara)</li>
<li>WEBUI: Support SSL certificate bundles. Issue #4896. (UnDifferential)</li>
<li>WEBUI: Change the order of the values of speed labels (buinsky)</li>
<li>WEBUI: Bump WebUI API_VERSION</li>
<li>SEARCH: Update PirateBay plugin. (ngosang)</li>
<li>SEARCH: Added TorLock search engine (ngosang)</li>
<li>COSMETIC: Fix splash screen staying on top of all windows. Closes #1391. (sledgehammer999)</li>
<li>COSMETIC: Rearrange advanced settings (Chocobo1)</li>
<li>COSMETIC: Cleanup "about" dialog (Chocobo1)</li>
<li>COSMETIC: Cleanup "Add New Torrent" dialog (Chocobo1)</li>
<li>COSMETIC: Use short date in addnewtorrentdialog (Chocobo1)</li>
<li>COSMETIC: Change "Free disk space" to "Free space on disk" (Chocobo1)</li>
<li>COSMETIC: Let OS handle DPI scaling for now. Should let Qt do the work when it's more mature. (Chocobo1)</li>
<li>COSMETIC: Put comment_lbl in QScrollArea. Closes #4881. (Chocobo1)</li>
<li>COSMETIC: Change the order of the values of speed labels (buinsky)</li>
<li>COSMETIC: Cleanup the Log tab (Chocobo1)</li>
<li>COSMETIC: Cleanup the RSS tab (Chocobo1)</li>
<li>OTHER: Set "Show splash screen on start up" option default to off (Chocobo1)</li>
<li>OTHER: Support for cross-compilation with MXE (Boris Nagaev)</li>
<li>OTHER: Add basic (and unofficial) cmake support (Eugene Shalygin)</li>
<li>OTHER: Move some URLs overs to https (funkydude)</li>
<li>OTHER: Add appveyor support (Chocobo1)</li>
<li>OTHER: TravisCI: switch to Trusty image. Closes #4953. (Chocobo1)</li>
<li>OTHER: Many other internal code restructuring, cleaning and fixing.</li>
</ul>

<a id="forum_restored"><h3>Saturday February 13th 2016 - The forum is restored</h3></a>
<p>As mentioned <a href="#forum_compromise">earlier</a>, there were reports that the forums from a bunch of bittorrent related sites were hacked. As a result we switched off our forum to investigate. To the best of our knowledge we weren't hacked. We didn't discover any evidence of unauthorized entry. We highly suspect that the self-proclaimed "hacker" was a fraud instead. Just so you know the passwords are saved hashed and salted in the database. It is very difficult to reverse this and obtain the real password. In any case, we reset all the passwords and switched on the forum. You already should have received an email about your new password.</p>

<h3>Thursday January 21th 2016 - qBittorrent v3.3.3 release</h3>
<p>qBittorrent v3.3.3 was released. See changelog. This build also fixes a problem that requested "G:" drive on Windows.</p>
<ul>
<li>BUGFIX: Temporarily disable "filename" column of peers view. It has a bug that causes frequent crashes. See issue #4597.</li>
<li>WEBUI: Move style of dynamic table header to CSS (buinsky)</li>
<li>WEBUI: Fix unnecessary updates of torrent peers table (buinsky)</li>
</ul>

<h3>Tuesday January 19th 2016 - qBittorrent v3.3.2 release</h3>
<p>qBittorrent v3.3.2 was released. It fixes a few regressions. If you use watch folders you'll need to reconfigure them.<br/>The Windows binary is compiled using MSVC 2015 now.</p>
<ul>
<li>FEATURE: Add a new column to peers list that shows list of files which are downloaded right now from a peer. (evsh)</li>
<li>FEATURE: Improve the "Watch folders" UI. Closes #4300. You'll need to redo your watch folders settings. (sledgehammer999, glassez)</li>
<li>FEATURE: Support loading multiple magnets/hashes/urls per .magnet file in the watched folder(one per line). Closes #217. (sledgehammer999)</li>
<li>BUGFIX: Fix resolution of peer host names. Closes #4307. (sledgehammer999)</li>
<li>BUGFIX: Don't recheck twice after 'Force Recheck' with 'Recheck torrents on completion' enabled. Closes #4274. (sledgehammer999)</li>
<li>BUGFIX: Don't apply some settings again if they weren't changed. Closes #4278. (sledgehammer999)</li>
<li>BUGFIX: Update ISO 3166 country codes. Closes #3942. (Chocobo1)</li>
<li>BUGFIX: Fix moving torrents to Temp after app restart. Closes #4434. (glassez)</li>
<li>BUGFIX: Fix crash in favicon code due to null pointer dereference. (glassez)</li>
<li>BUGFIX: Move the 'qBittorrent-resume' file even when no magnets were recovered. Also make sure to rename it with a unique name. Closes #4334. (sledgehammer999)</li>
<li>BUGFIX: Don't add the watch folder before the user closes the Preferences window. (sledgehammer999)</li>
<li>BUGFIX: Remove watch folders permanently only if the user accepts the Preferences dialog. (sledgehammer999)</li>
<li>BUGFIX: Better handling of cookies in the download manager (glassez)</li>
<li>BUGFIX: Use the download manager for RSS, the program updater and the dns updater. (glassez)</li>
<li>BUGFIX: Fix reconfigure additional trackers (glassez)</li>
<li>BUGFIX: Fix loading corrupted .fastresume file (glassez)</li>
<li>WEBUI: Show filtered torrents number (buinsky)</li>
<li>WEBUI: Fix paused, active and inactive filters (buinsky)</li>
<li>WEBUI: Fixed bug when uploading several files and only the last one was considered. (naikel)</li>
<li>WEBUI: Implemented WebUI interface for the new Watched Folders feature (naikel)</li>
<li>WEBUI: Fix possible showing "qBittorrent client is not reachable" message on deleting torrents. (buinsky)</li>
<li>WEBUI: Don't show "Limit download speed" menu item for downloaded torrents. (buinsky)</li>
<li>WEBUI: Update webui run program parameters (buinsky)</li>
<li>WEBUI: Allow to remove the label assigned to a torrent (pmzqla)</li>
<li>WEBUI: Repair translation (buinsky)</li>
<li>WEBUI: Remember last opened tab (buinsky)</li>
<li>WEBUI: Bump WebUI API_VERSION and API_VERSION_MIN.</li>
<li>COSMETIC: Update native names for Chinese locales. Closes #4381. (sledgehammer999)</li>
<li>COSMETIC: Rename column header in Content view. (Chocobo1)</li>
<li>COSMETIC: Edit speed limits and upload ratio icons (buinsky)</li>
<li>SEARCH: Code refactoring. (glassez)</li>
<li>SEARCH: Fix PirateBay plugin implementation for Python 3 (ngosang)</li>
<li>SEARCH: Update PirateBay URL. Closes #4470 (ngosang)</li>
<li>RSS: Code refactoring. (glassez)</li>
<li>LINUX: Fix build. (sledgehammer999)</li>
<li>OSX: Set qBittorrent as default torrent app in  Mac OS (dmitry.viktorov)</li>
<li>OTHER: Fix lrelease version due to the default Qt5 build (Fabio Alessandro Locati)</li>
<li>OTHER: Indicate to the user that he's going to download the new version. Indicate from the installer that the old version was detected and no settings will be deleted. Closes #4320. (sledgehammer999)</li>
<li>OTHER: Don't require GUI libs for qt4 nox build. Closes #4404. (sledgehammer999)</li>
<li>OTHER: Fix cross-compilation (bnagaev)</li>
<li>OTHER: Allow GeoIP in nox builds (glassez)</li>
</ul>

<a id="forum_compromise"><h3>Tuesday December 22nd 2015 - Forum compromise</h3></a>
<p>It has come to our attention that the forum database containing user info <b>might</b> have been compromised by a third unauthorized party. <u>We aren't able to tell if this is true from our logs</u>. And we aren't sure if the hack was real. See more info in this <a href="https://torrentfreak.com/hackers-grab-deluge-and-qbittorrent-user-databases-151221/">article</a>. If the database was indeed compromised it was probably through a bug of the forum software. We had installed version 2.0.11 of <a href="http://www.simplemachines.org/">SMF</a>, which is the latest stable. As a precaution we have taken down the forums. The passwords weren't saved as plaintext, but as salted hashes. It will make it very difficult for the hackers to recover the real passwords. However, we strongly recommend you to change your password to any other site on which you used the same password. We are sorry for the inconvenience.</p>

<h3>Tuesday December 8th 2015 - qBittorrent v3.3.1 release</h3>
<p>qBittorrent v3.3.1 was released. It fixes a few regressions. Mac OS X builds will be provided at a later time.</p>
<ul>
<li>FEATURE: FEATURE: New "Set as default label" option in Add torrent dialog. (takiz)</li>
<li>FEATURE: Support wildcards for filtering torrent list and torrent content (vlakoff)</li>
<li>BUGFIX: Fix -1 is displayed instead of the infinity symbol (Chocobo1)</li>
<li>BUGFIX: Fix scan dirs settings saving. Closes #4254, #4239, #4187. (glassez)</li>
<li>BUGFIX: Exported torrents now use name instead of hash. Closes #4205. (glassez)</li>
<li>BUGFIX: Improve upgrade to v3.3.0. Now undownloaded magnets will be migrated too. Fixes #4195. (glassez)</li>
<li>BUGFIX: Fix wrong encoding for listen failed error message. (glassez)</li>
<li>BUGFIX: Fix RSS not automarking articles as read. (glassez)</li>
<li>BUGFIX: Fix possible deadlock during application exit. (sledgehammer999)</li>
<li>WEBUI: Cookies support on WebUI when downloading torrent from a URL. (Naikel Aparicio)</li>
<li>WEBUI: Modified download and upload windows to allow autocompletion of browsers. (Naikel Aparicio)</li>
<li>WEBUI: Fixed the spinner in the WebUI upload page. (Naikel Aparicio)</li>
<li>WEBUI: Modified height of the WebUI download page. (Naikel Aparicio)</li>
<li>WEBUI: Fixed all the JavaScript functions for download and upload pages. (Naikel Aparicio)</li>
<li>WEBUI: Add seeds tab to WebUI (buinsky)</li>
<li>WEBUI: Bump WebUI API_VERSION.</li>
<li>COSMETIC: Cleanup "Trackers", "Peers", "HTTP Sources", "Speed" and "Content" page layout (Chocobo1)</li>
<li>COSMETIC: Reduce mainwindow border width (Chocobo1)</li>
<li>COSMETIC: Use QLineEdit built-in ClearButton (Qt5 only) (Chocobo1)</li>
<li>COSMETIC: Change text description for half-open connection (Chocobo1)</li>
<li>OTHER: Change update URL to FossHub. Closes #4188. (sledgehammer999)</li>
</ul>

<h3>Sunday November 29th 2015 - qBittorrent v3.3.0 release</h3>
<p>qBittorrent v3.3.0 was released. A lot has happened to it. And as you may have noticed from the v3.2.x series, we now have a healthy amount of devs contributing to it.<br/> This series have switched to Qt5 but Qt4 is still supported. Temporarily OS X builds will use Qt4.</p>
<ul>
<li>FEATURE: Huge core code refactoring. Problems with labels, temp folders etc should be eliminated. Smoother UI should be observed too. (glassez)</li>
<li>FEATURE: Speed graph (Anton Lashkov)</li>
<li>FEATURE: Add multiple peers in Peers addition dialog. Closes #1563, #2245, #3133, #1419, #3287, #1419 (ngosang)</li>
<li>FEATURE: Allow to copy all peers with a keyboard shortcut (ngosang)</li>
<li>FEATURE: Use GeoIP2 database, allows for country resolution of IPv6 peers. It is no longer embedded in the program but downloaded and updated monthly. (glassez)</li>
<li>FEATURE: Add more "Run External Program" parameters, closes #3053, #238, #1291, #1522. (Chocobo1, glassez)</li>
<li>FEATURE: Add an option to allow the use of proxies only for torrents. Closes #2701. (pmzqla)</li>
<li>FEATURE: Detect network interface state changes. It should detect VPN connection resets. (Pawel Polewicz)</li>
<li>FEATURE: Switch to using c++11 (glassez)</li>
<li>FEATURE: Automatically add trackers to new downloads. (ngosang)</li>
<li>FEATURE: You can now choose the path to download for watched folders. (dsimakov, sledgehammer999)</li>
<li>FEATURE: Switch to Qt5 by default.</li>
<li>BUGFIX: Fix progress calculation in Content tab. Closes #2639 Closes #2752 (ngosang)</li>
<li>BUGFIX: Fix label filter. Closes #3429. (glassez)</li>
<li>BUGFIX: Fix "Run External Program Launches too Early" issue, closes #2107. (Chocobo1)</li>
<li>BUGFIX: Don't remove torrent contents parent folder, even it is empty. Closes #2244. (Chocobo1)</li>
<li>BUGFIX: Always apply filter for manually banned IPs. Related #3988. (sledgehammer999)</li>
<li>BUGFIX: Fix reporting of tracker status. Closes #3101. (sledgehammer999)</li>
<li>BUGFIX: Don't connect to "any interface" when the configured network interface is missing. Closes #3943, #2741, #1159, #844 and #143. (sledgehammer999)</li>
<li>BUGFIX: Fix reordering of first column with Qt5. Closes #2835. (sledgehammer999)</li>
<li>COSMETIC: Add back "qBittorrent" in program updater title, closes #3549. (Chocobo1)</li>
<li>COSMETIC: Use infinity symbol rather than -1 for nb_connections (pmzqla)</li>
<li>COSMETIC: Move uTP options to it's own section (Chocobo1)</li>
<li>COSMETIC: Fix availability bar & progress bar height being too small on high DPI displays (Chocobo1)</li>
<li>COSMETIC: Fix availability label & progress label clipped on high DPI displays, closes #3237. (Chocobo1)</li>
<li>COSMETIC: Add tooltips/legend for availability bar & progress bar (Chocobo1)</li>
<li>COSMETIC: Use theme color for background in PropertiesWidget (Chocobo1)</li>
<li>COSMETIC: Replace horizontal line with border in bottom panel (Chocobo1)</li>
<li>COSMETIC: Various visual changes in the side panel. (Chocobo1)</li>
<li>COSMETIC: Use thin border for transfer list (Chocobo1)</li>
<li>COSMETIC: Make URL in "Add Torrent File..." clickable. Closes #3928. (Chocobo1)</li>
<li>COSMETIC: New view for errored torrents. (sledgehammer999)</li>
<li>WEBUI: Add information in General tab (ngosang)</li>
<li>WEBUI: Reorder "Super seeding mode" option in right click menu (ngosang)</li>
<li>WEBUI: Clean up JavaScript code (ngosang)</li>
<li>WEBUI: Added labels support. #648 (Felipe Barriga Richards, ngosnag)</li>
<li>WEBUI: Fix accessing the WebUI through IPv6 (ngosang)</li>
<li>WEBUI: Bump WebUI API_VERSION to 6.</li>
<li>WEBUI: Change selected color to differentiate from the progressbar. (Daniel Peukert, ngosang)</li>
<li>SEARCH: Add "Copy description page URL" button in search tab. Closes #2371. (pmzqla)</li>
<li>SEARCH: Add https_proxy env variable. This forces Python to use the HTTP proxy for HTTPS connections. (pmzqla)</li>
<li>SEARCH: Detect new plugin URL from clipboard (ngosang)</li>
<li>SEARCH: Update Torrentz trackers (ngosang)</li>
<li>WINDOWS: Fix german translation of the installer (netswap)</li>
<li>NOX: Don't ask the user questions in nox build when in non-interactive mode. Closes #3875. (sledgehammer999)</li>
<li>OTHER: Fixed typos, spelling correction (dartraiden)</li>
<li>OTHER: Fix need for restart to enable/disable peer countries resolution. (glassez)</li>
<li>OTHER: Unload the GeoIP db when disabled. (sledgehammer999)</li>
<li>OTHER: Reduce max value of "Disk cache size" to 1536MB for 32bit. Closes to #4028. (Chocobo1)</li>
<li>OTHER: Make "Download in sequential order" and "Download first and last piece first" options independent. (glassez)</li>
</ul>

<h3>Saturday October 10th 2015 - qBittorrent v3.2.4 release</h3>
<p>qBittorrent v3.2.4 was released. This release finally fixes an obscure "hit-and-run" bug with trackers.
It is actually a libtorrent bug which is fixed in their source. But for fixing builds that will use older versions of
libtorrent (eg on Linux) I made a change in the v3.2.4 code that will circumvent the bug anyway.
This version should be the last in the v3.2.x series. The upcoming v3.3.x is pretty stable and we'll focus to streamline it for release.<br>
PS: Ubuntu and OS X builds will be available in a few hours.</p>
<ul>
<li>FEATURE: Select the file of single file torrents when opening destination folder (pmzqla)</li>
<li>BUGFIX: Fix crash with invalid favicon. Closes #3632. (glassez)</li>
<li>BUGFIX: Try to download favicon.png when the download of favicon.ico fails (pmzqla)</li>
<li>BUGFIX: Try to avoid loading a corrupted configuration file. Also log errors encountered while saving/loading the configuration. Closes #3503. (sledgehammer999)</li>
<li>BUGFIX: Allow adding torrent link from Torcache (jsayol)</li>
<li>BUGFIX: Don't limit the number of torrents that can be announced to the tracker/dht/lsd. Closes #3473. (sledgehammer999)</li>
<li>BUGFIX: Fix potential crash when memory allocation failed. Closes #3877. (Chocobo1)</li>
<li>COSMETIC: Change Queue buttons order in the Toolbar (GUI & Web UI) (ngosang)</li>
<li>COSMETIC: Move option "Ignore transfer limits on local network" to Speed page (Chocobo1)</li>
<li>COSMETIC: Move option "Confirm torrent deletion" to Behavior page (Chocobo1)</li>
<li>COSMETIC: Fix typos. Make `μTP` untranslatable. Use American variation of words. Closes #3654. (sledgehammer999)</li>
<li>COSMETIC: Optimize text color for dark themes. Closes #3633 and #3815. (sledgehammer999)</li>
<li>COSMETIC: Show current label in the torrent context menu. Closes #3776. (sledgehammer999)</li>
<li>WEBUI: Add save_path to /query/torrents (Casey Bodley)</li>
<li>WEBUI: Bump API_VERSION to 5</li>
<li>SEARCH: Fix python detection when the 'Anaconda' software is installed. Closes #3731. (sledgehammer999)</li>
<li>RSS: Handle magnet links as torrents instead of news URLs. Closes #3560 (ngosang)</li>
<li>RSS: Trim elements text in RSS articles (ngosang)</li>
<li>RSS: Fix contextual menu in RSS torrents list (ngosang)</li>
<li>RSS: Improve error handling when a RSS feed doesn't contain torrents (ngosang)</li>
<li>RSS: More precise message and code simplification in RSS feeds deletion (ngosang)</li>
<li>RSS: Don't hide the elements in Unread list when clicked (ngosang)</li>
<li>RSS: Allow multiple selection in RSS torrents list (ngosang)</li>
<li>RSS: Simplify string translation (ngosang)</li>
<li>RSS: Handle more types of RSS feeds (ngosang)</li>
<li>RSS: Fix RSS panel position not saved (ngosang)</li>
<li>RSS: Fix forgetting label changes to first item in RSS rule list. (Gelmir)</li>
<li>RSS: Add label to UI when a new one is creating during rule addition. (Gelmir)</li>
<li>RSS: Removes refresh message when adding a new feed (ngosang)</li>
<li>RSS: Fix RSS crash when deleting RSS feeds. Closes #997, #2152, #2461, #3718, #3747, #3766, #3806, #3814, #3829 and #3846. (ngosang)</li>
<li>RSS: Sort labels in RSS Downloader dialog, closes #3140. (Chocobo1)</li>
<li>WINDOWS: Correctly show german letters in the installer. Closes #3574, #3566. (sledgehammer999)</li>
<li>WINDOWS: Fix file selection on Explorer when the filename contains weird characters. Closes #3185. (sledgehammer999)</li>
<li>WINDOWS: Fix wrong default download directory in Windows. Closes #2625. (Chocobo1)</li>
<li>WINDOWS: Fix German translation of the installer. (netswap)</li>
<li>LINUX: Fix broken .desktop file icon for some locales. See #3905. (sledgehammer999)</li>
<li>OTHER: Fix ppc64le detection during configure (sledgehammer999)</li>
<li>OTHER: Don't use sed in configure. Closes #3169. (pmzqla)</li>
<li>OTHER: Fix broken donation link. Closes #3771. (sledgehammer999)</li>
<li>OTHER: Add forum link in README. Closes #3853. (sledgehammer999)</li>
<li>OTHER: New translation: Esperanto</li>
<li>OTHER: Fix Qt5 nox build on non-Windows. (sledgehammer999)</li>
</ul>

<h3>Sunday October 04th 2015 - Paypal issue resolved</h3>
<p>Dear users and supporters!</p>
<P>We had a minor issue with our Paypal account, which has now been resolved.<br>
Donation is now possible again - through Paypal.<br>
This does not mean that Paypal is preferred, the other methods work just fine too.<br>
(you may need to force refresh the main page to make your browser discard the old cached one)</P>
<p>Again, I would like to thank everyone for the continued support and donations.</p>

<h3>Sunday August 02nd 2015 - qBittorrent v3.2.3 release</h3>
<p>qBittorrent v3.2.3 was released.</p>
<ul>
<li>BUGFIX: Fix crash when closing a search tab while search is running (pmzqla)</li>
<li>SEARCH: Other minor search fixes and improvements (pmzqla)</li>
</ul>

<h3>Saturday August 01st 2015 - qBittorrent v3.2.2 release</h3>
<p>qBittorrent v3.2.2 was released.</p>
<ul>
<li>FEATURE: Allow to force reannounce DHT too (Chocobo1)</li>
<li>FEATURE: Implement an option to disable confirmation of torrent recheck (blaxspirit)</li>
<li>FEATURE: Allow to copy all the trackers with a keyboard shortcut (pmzqla)</li>
<li>BUGFIX: Fix torrent renaming. Closes #3398 (ngosang)</li>
<li>BUGFIX: Fix localhost address (::ffff:127.0.0.1) is not recognized when connecting to WebUI (Chocobo1)</li>
<li>BUGFIX: Fix '&' character in label name becomes accelerator key, closes #3454. (Chocobo1)</li>
<li>BUGFIX: Fix HTTP header parsing when torrent filename contains a semicolon. Closes #3511.</li>
<li>BUGFIX: Fix installing search plugin from local file. (sledgehammer999)</li>
<li>BUGFIX: Fix installing search plugin by drag-n-dropping file. (sledgehammer999)</li>
<li>COSMETIC: Update color scheme of completed.png icon. (sledgehammer999)</li>
<li>COSMETIC: Fix printing of the copyright symbol in the About dialog. (sledgehammer999)</li>
<li>COSMETIC: Minor changes in Preview File dialog (ngosang)</li>
<li>COSMETIC: Add Force Resume icon (ngosang)</li>
<li>COSMETIC: Add count of unread items to RSS tab label (pmzqla)</li>
<li>WEBUI: Ports between 1 and 65535 as in the GUI. Closes #1602 (ngosang)</li>
<li>WEBUI: Fix an error in Content tab when the torrent doesn't have metadata (ngosang)</li>
<li>WEBUI: New option Web UI port UPNP. Closes #3358 (ngosang)</li>
<li>WEBUI: Fix API Content Types. Closes #3393 (ngosang)</li>
<li>WEBUI: Fix empty trackers addition (ngosang)</li>
<li>WEBUI: Torrent download from hash. Closes #1173 (ngosang)</li>
<li>WEBUI: Fix sort by queue number (ngosang)</li>
<li>WEBUI: Open external links in a new window/tab (ngosang)</li>
<li>WEBUI: Massive increase in performance. (ngosang)</li>
<li>SEARCH: Search status per tab (DoumanAsh)</li>
<li>SEARCH: Remove the word 'torrent' in ExtraTorrent results (ngosang)</li>
<li>SEARCH: Prefer python3 over python2 on Linux and OS X (pmzqla)</li>
<li>SEARCH: Show notification if Python is not found and a search is started (pmzqla)</li>
<li>SEARCH: Update link to the Windows Python installer (pmzqla)</li>
<li>SEARCH: Improve checks for python. Print python version and path to log. (sledgehammer999)</li>
<li>SEARCH: Improve Python detection (ngosang)</li>
<li>OTHER: Improvements on the build system (Chocobo1)</li>
<li>OTHER: Bump minimum libtorrent version required to 1.0.6/0.16.19. (sledgehammer999)</li>
<li>OTHER: New translation: Slovenian</li>
</ul>

<h3>Saturday July 11th 2015 - qBittorrent v3.2.1 release</h3>
<p>qBittorrent v3.2.1 was released. The lag that some users experience when selecting a torrent or right-clicking it is fixed in v3.3.x series. However the code cannot be backported to v3.2.x series.</p>
<ul>
<li>FEATURE: Change default preferences (ngosang)</li>
<li>FEATURE: Add "Add link to torrent" menu in TrayIconMenu. Closes #2918. (Chocobo1)</li>
<li>FEATURE: Allow to Open files from the properties pane by pressing "Enter" (pmzqla)</li>
<li>FEATURE: Add checkbox option for IpFilterTrackers. (Chocobo1)</li>
<li>FEATURE: Download-from-URL textbox change focus on tab key (Mayank Asthana)</li>
<li>FEATURE: Increase priority value of "High" (pmzqla)</li>
<li>FEATURE: Add 16 KiB, 8 MiB and 16 MiB piece sizes in Torrent Creator (ngosang)</li>
<li>BUGFIX: Disable Auto piece size when creating a new torrent (ngosang)</li>
<li>BUGFIX: Set default focus to cancel button in delete confirm dlg, closes #3085 (Chocobo1)</li>
<li>BUGFIX: Set default focus to ok button in add new torrent dlg (Chocobo1)</li>
<li>BUGFIX: Set default focus to no button in exit confirm box (Chocobo1)</li>
<li>BUGFIX: Fix Start Minimized checkbox in Options (ngosang)</li>
<li>BUGFIX: Remove limits on alternative speeds setting (LazyBui)</li>
<li>BUGFIX: Fix sorting torrents by ETA (pmzqla)</li>
<li>BUGFIX: Improve ratio calculation formula. Closes #3096. (Chocobo1)</li>
<li>BUGFIX: Clear missing files flag when resuming or force rechecking. Fixes issues in #2750. (sledgehammer999)</li>
<li>BUGFIX: Delete tempfile when downloading favicon.ico. Closes #3257. (sledgehammer999)</li>
<li>BUGFIX: Don't close downloadFromURL dialog when showing empty url warning (Chocobo1)</li>
<li>BUGFIX: Minimize to tray only if the relevant option is enabled. (sledgehammer999)</li>
<li>BUGFIX: Update disk space label after changing partition, closes #3309. (Chocobo1)</li>
<li>BUGFIX: Don't use a default upload limit. Closes #3275. (sledgehammer999)</li>
<li>BUGFIX: Fix Properties bar size when started minimized to tray. Closes #3206. (sledgehammer999)</li>
<li>COSMETIC: Change option text "Confirmation on exit when torrents are active" (Chocobo1)</li>
<li>COSMETIC: Enable to choose dark/light tray icons on all platforms. (Chocobo1)</li>
<li>COSMETIC: Use AllUppercase for label text (Chocobo1)</li>
<li>COSMETIC: changes in typography (ngosang)</li>
<li>COSMETIC: Menu revamp (Chocobo1)</li>
<li>COSMETIC: Revamp general tab info (Chocobo1)</li>
<li>COSMETIC: Better update message for users (Chocobo1)</li>
<li>COSMETIC: Fix ugly 'C++' wrapping in About dialog. (glassez)</li>
<li>WEBUI: Fix login and logout relative URLs (ngosang)</li>
<li>WEBUI: Fix resumeAll and pauseAll. Closes #3016 (ngosang)</li>
<li>WEBUI: Changes in title bar (ngosang)</li>
<li>WEBUI: Complete translatable strings (ngosang)</li>
<li>WEBUI: Minor changes in style (ngosang)</li>
<li>WEBUI: Fix Max connections and Time active in transfer information (ngosang)</li>
<li>WEBUI: New config - Global maximum number of upload slots (ngosang)</li>
<li>WEBUI: Display wasted data with friendly units. Closes #2994 (ngosang)</li>
<li>WEBUI: add delay in shutdown command in order to send out response msg (Chocobo1)</li>
<li>WEBUI: Option to hide Top Toolbar (ngosang)</li>
<li>WEBUI: Reorder the tabs/groups in Options window (ngosang)</li>
<li>WEBUI: Add new options (ngosang)</li>
<li>WEBUI: Increase API_VERSION due to changes in #3279, #3197, #3226 and #3040 (ngosang)</li>
<li>WEBUI: Add Web Seeds (HTTP Sources) tab (ngosang)</li>
<li>WEBUI: Don't update the tabs if tab's panel is collapsed (ngosang)</li>
<li>WEBUI: Fix alternative global rate limits. (ngosang)</li>
<li>SEARCH: Fix thepiratebay. Closes #3012 (ngosang)</li>
<li>SEARCH: Improve torrentz engine to return more results (ngosang)</li>
<li>SEARCH: Change width of columns in search tab. Closes #764 (ngosang)</li>
<li>SEARCH: Make strings translatable in search engine (ngosang)</li>
<li>SEARCH: Aborting search engine process during closure. Close #2671 (DoumanAsh)</li>
<li>SEARCH: Perform searches in parallel (DoumanAsh)</li>
<li>SEARCH: Add Demonoid search engine (ngosang)</li>
<li>SEARCH: Minor fixes in search engines (ngosang)</li>
<li>SEARCH: Show the version of search engines (ngosang)</li>
<li>SEARCH: Update Legit Torrent to remove sgmllib (DoumanAsh)</li>
<li>SEARCH: Update KickassTorrents (ngosang)</li>
<li>SEARCH: Update BTDigg (ngosang)</li>
<li>SEARCH: Update Torrentz (ngosang)</li>
<li>SEARCH: Update ExtraTorrent (ngosang)</li>
<li>SEARCH: Update TorrentReactor (ngosang)</li>
<li>SEARCH: Fix Python 2 implementation of Torrentz (ngosang)</li>
<li>SEARCH: Cosmetic changes in search engine (ngosang)</li>
<li>SEARCH: Fix column sort in search engine. Closes #2621 (ngosang)</li>
<li>RSS: Update matching RSS articles while editing rules (pmzqla)</li>
<li>WINDOWS: Fix python detection from registry when multiple versions are installed (sledgehammer999)</li>
<li>LINUX: Fixes Linux issue for when the theme doesn't have a corresponding icon. (sledgehammer999)</li>
<li>OTHER: Correctly detect FreeBSD when configuring. (sledgehammer999, yurivict)</li>
<li>OTHER: Add translator to credits.</li>
<li>OTHER: New translation: Indonesian.</li>
<li>OTHER: Split Chinese locales into Chinese Simplified, Chinese Traditional(Taiwan), Chinese Traditional(Hong Kong). (sledgehammer999)</li>
</ul>

<h3>Sunday May 10th 2015 - qBittorrent v3.2.0 release</h3>
<p>qBittorrent v3.2.0 was released. After a long wait it is released. WebUI users will need to reset their passwords. Windows user with many torrents don't need to manually exit the application before system shutdown anymore.</p>
<p>Thanks to all the contributors. Below follows the <b>HUGE</b> list of changes.</p>
<ul>
<li>FEATURE: Show actual protocol for listen success/failure in the log. Needs libtorrent v1.0.0 (Gelmir)</li>
<li>FEATURE: Support per tracker re-announce. Needs libtorrent v1.0.0 (Gelmir)</li>
<li>FEATURE: Support saving in network locations. (Gelmir)</li>
<li>FEATURE: Support Qt5 (mostly Glassez)</li>
<li>FEATURE: Code optimizations resulting in a more CPU efficient and snappier qBittorrent. (sorokin)</li>
<li>FEATURE: WEBUI code rewritten, refactored and improved. (glassez, pmzqla, buinsky)</li>
<li>FEATURE: Add option to hibernate computer in Auto-Shutdown menu (Bruno Barbieri)</li>
<li>FEATURE: Cache preferences in memory. Minimize chance of settings corruption. Closes #1272, #1523, #1694. (sledgehammer999)</li>
<li>FEATURE: Option to disable connections not supported by proxies. Closes #1894. (sledgehammer999)</li>
<li>FEATURE: Haiku OS support (diger)</li>
<li>FEATURE: Add a save resume data interval option(useful for SSD). (john-peterson)</li>
<li>FEATURE: Add "Last Seen Complete" column (pmzqla)</li>
<li>FEATURE: Add "Last Activity" column (pmzqla)</li>
<li>FEATURE: Add "Total Size" column (pmzqla)</li>
<li>FEATURE: Show current speed limits in the status bar (pmzqla)</li>
<li>FEATURE: Episode filtering for RSS (Gelmir)</li>
<li>FEATURE: Highlight files when opening containing folder on Windows and Linux(nautilus, dolphin, konqueror). (Gelmir, pmzqla)</li>
<li>FEATURE: Setting to ignore RSS rule matches for X days (Gelmir)</li>
<li>FEATURE: Add hotkeys and buttons for Top and Bottom priorities (alfrix)</li>
<li>FEATURE: Implement peer relevance column. Closes #1630. (sledgehammer999)</li>
<li>FEATURE: Show reason why a peer was blocked. Needs libtorrent 1.0.x. (sledgehammer999)</li>
<li>FEATURE: Use the 'fastest_upload' setting as seed choking algorithm. (sledgehammer999)</li>
<li>FEATURE: Allow to set text options for the toolbar icons (pmzqla)</li>
<li>FEATURE: Add 'Resumed' torrent filter (john.s.peterson)</li>
<li>FEATURE: 'Add New Torrent` dialog has a button for quickly choosing a location (sledgehammer999)</li>
<li>FEATURE: Copy selected peers as IP:Port format. (ngosang)</li>
<li>FEATURE: Show info hash in the torrent details in 'Add New Torrent' dialog. (sledgehammer999, chrishirst)</li>
<li>FEATURE: New feature: Remove empty labels (ngosang)</li>
<li>FEATURE: Add "Copy name" option in right-click menu of torrent list. Closes #2452 (chrishirst)</li>
<li>FEATURE: Implement tracker list in the side panel. Closes #170. (sledgehammer999)</li>
<li>FEATURE: Implement a 'Completed' status. Closes #2326 #2483 #939. (sledgehammer999)</li>
<li>FEATURE: Columns for session-based download and upload statistics (LazyBui)</li>
<li>BUGFIX: Use completed time from libtorrent directly. Closes #1726.</li>
<li>BUGFIX: Speedup and fix a bug in torrent moving. (sorokin)</li>
<li>BUGFIX: Scan Folder dialog now remembers last location (Bryan Roscoe)</li>
<li>BUGFIX: Show input box to filter torrent list only when the list is shown (pmzqla)</li>
<li>BUGFIX: Add placeholder text to the input to filter the torrent list (pmzqla)</li>
<li>BUGFIX: Put directories first when sorting torrent content by name (pmzqla)</li>
<li>BUGFIX: Fix missing icon for open action in file list (Gelmir)</li>
<li>BUGFIX: Set placeholder text to torrent content filter. (sorokin)</li>
<li>BUGFIX: Fix torrent creation when data is too large (sorokin)</li>
<li>BUGFIX: Load torrents that have big metadata file. Closes #1889. (sledgehammer999)</li>
<li>BUGFIX: Use correct separator for "OR" condition in RSS rules (pmzqla)</li>
<li>BUGFIX: Don't waste UI space in 'Content' window. Closes #2159 (alfrix)</li>
<li>BUGFIX: Fix the language selection in the combobox when the system locale only has a lang equivalent and not a lang_COUNTRY one. Closes #1786. (sledgehammer999)</li>
<li>BUGFIX: Don't overwrite the 'Add Paused' setting from the Add New Torrent Dialog (Gelmir)</li>
<li>BUGFIX: Fix file preview when .!qB extension is used (pmzqla)</li>
<li>BUGFIX: Ensure that the priority column has enough width when queueing is enabled. Closes #2263. (sledgehammer999)</li>
<li>BUGFIX: Don't put limits to the alternative speed limits (pmzqla)</li>
<li>BUGFIX: Make space key change all selected files' checkboxes (sorokin)</li>
<li>BUGFIX: Don't block peers that use privileged ports. (sledgehammer999)</li>
<li>BUGFIX: Accept multiple files at once. Closes #2253 (buinsky)</li>
<li>BUGFIX: Don't touch torrents whose files are missing. Closes #342 #2308 #2469. (sledgehammer999)</li>
<li>BUGFIX: Save the new save path first in the history. Closes #2382. (sledgehammer999)</li>
<li>BUGFIX: Fix default tracker in 'Create Torrent' dialog. (ngosang)</li>
<li>BUGFIX: Let the OS decide the default interface regardless of IPv4/IPv6. Closes #2156. (Chocobo1)</li>
<li>BUGFIX: Delete the correct selected torrents when the list is filtered. Closes #2729. (sledgehammer999)</li>
<li>BUGFIX: Don't use HTML in tray icon pop-up on OSX. Closes #2830. (pmzqla)</li>
<li>BUGFIX: Fix crash when trying to open destination folder on a torrent with no metadata. Closes #2522. (pmzqla)</li>
<li>BUGFIX: Change torrent name when metadata is retrieved. (ngosang)</li>
<li>COSMETIC: Removes white bar in the labels list. Closes #1151. (ngosang)</li>
<li>COSMETIC: Fix speed printing in the tray icon and in the title bar. Closes #2737. (sledgehammer999)</li>
<li>COSMETIC: Change the color scheme used (sledgehammer999)</li>
<li>RSS: Display remote images in the preview (Mladen Milinkovic)</li>
<li>RSS: Format html descriptions in the preview (Mladen Milinkovic)</li>
<li>RSS: Support overriding global "Add paused" option on per rule basis (Gelmir)</li>
<li>WINDOWS: Fix automatic python download. Closes #2076. (sledgehammer999)</li>
<li>WINDOWS: Fix crash when searching the registry for installed python (glassez)</li>
<li>WINDOWS: Tell Windows to wait during shutdown. (sledgehammer999, paolo-sz)</li>
<li>OSX: Use the configure script to prepare the build in Mac OSX too. Closes #2295. (sledgehammer999)</li>
<li>OSX: Fix the build (David Christenson)</li>
<li>LINUX: Distribute systemd service file for the nox build (sledgehammer999, leigh123linux)</li>
<li>LINUX: Create qBittorrent.appdata.xml (alxpl)</li>
<li>SEARCH: Update KickassTorrents plugin (pmzqla)</li>
<li>SEARCH: Remove vertor engine. Closes #2260. (DoumanAsh)</li>
<li>SEARCH: Small fix of import in legittorrents engine (DoumanAsh)</li>
<li>SEARCH: Add combo box for fast search engine switch (DoumanAsh)</li>
<li>SEARCH: Fix error in mininova search engine (ngosang)</li>
<li>SEARCH: Fix piratebay. Closes #2270 (DoumanAsh)</li>
<li>SEARCH: Updated URL in kickasstorrents search engine (ngosang)</li>
<li>SEARCH: Torrentz search engine added (ngosang)</li>
<li>OTHER: Drop libtorrent 0.15.x support</li>
<li>OTHER: Drop Qt &lt; 4.8.0 support</li>
<li>OTHER: Migrate build system to autotools (sledgehammer999)</li>
<li>OTHER: Remove deprecated feature of separate DHT port. (sledgehammer999)</li>
<li>OTHER: Speedup compilation speed (sorokin)</li>
<li>OTHER: Backtrace generation now works on MinGW. (Gelmir)</li>
<li>OTHER: New translation: Hindi(India).</li>
</ul>

<h3>Sunday February 22nd 2015 - qBittorrent v3.1.12 release</h3>
<p>This is merely an excuse for a new and correct build for OSX users. The previous versions didn't work on older hardware. In the meantime I backported some important fixes for Windows which resulted in crashes too.</p>
<ul>
<li>OSX: Fix build to work with older machines. (sledgehammer999, Noctem)</li>
<li>WINDOWS: Fix automatic Python download. (sledgehammer999)</li>
<li>WINDOWS: Fix crashes due to memory corruption and improve Python registry searching. (glassez)</li>
</ul>

<h3>Wednesday December 17th 2014 - qBittorrent v3.1.11.1 release</h3>
<p>This is a Mac OS X release. This is the same source as v3.1.11. The difference is in the way it is compiled. Now it doesn't crash during launch due to incorrect dynamic library linking. Provided by user <b>DomT4</b> (github)</p>

<h3>Thursday November 27th 2014 - Ubuntu PPAs</h3>
<p>As you may have noticed already our Ubuntu PPAs were broken for quite some time now. Chris Dumez, who maintained them, was unable to fix them. Today I managed to create new and working PPAs. Head over to the <a href="download.php">download page</a> and find the new PPAs. You should remove the old ones to avoid conflicts.</p>

<h3>Wednesday October 22nd 2014 - qBittorrent v3.1.11 release</h3>
<p>qBittorrent v3.1.11 was released. I know I said that v3.1.10 would be the last of the v3.1.x series. However there were 2-3 regressions that warranted a new release. In the meantime, more bugfixes and features were committed by others. So v3.1.11 <b>should be</b> the last unless we find some serious issues with it.</p>
<p>Also some Windows 7 users experienced freezing of the GUI. We tracked it down to a specific commit in boost 1.56. So until boost fixes it, I am going to use boost 1.55 for Windows releases.</p>
<ul>
<li>FEATURE: Allow relative torrent paths when qBittorrent is already running (pmzqla)</li>
<li>FEATURE: Make Windows icons suitable for high dpi screens (pmzqla)</li>
<li>FEATURE: Increase maximum size of system icons (pmzqla)</li>
<li>BUGFIX: Fix crash in the "Content" widget when user would right click in it without a torrent selected (Ivan Sorokin)</li>
<li>BUGFIX: Don't show multiple unlock UI dialogs. Closes #2040. (sledgehammer999)</li>
<li>SEARCH: Fix bug where python would falsely be detected and nothing worked (paolo-sz)</li>
<li>SEARCH: Fix TorrentReactor search plugin (Bruno Barbieri)</li>
<li>SEARCH: Fix search engine encoding issues with python3 on Windows (Bruno Barbieri)</li>
<li>SEARCH: Pirate bay search engine update (DoumanAsh)</li>
<li>SEARCH: Internal improvements in the python code (Bruno Barbieri)</li>
<li>WINDOWS: Fix magnet link association. Closes #1952. (sledgehammer999)</li>
<li>WINDOWS and OSX: Fix again the program updater. The url was changed by sourceforge.net. Closes #1954. (sledgehammer999)</li>
<li>OSX: Fix compilation (sledgehammer999)</li>
<li>WEBUI: Set correct HTTP Content-Type in case of forbidden access. (pmzqla)</li>
<li>COSMETIC: Remove unneeded tooltip (pmzqla)</li>
<li>COSMETIC: Don't stretch the last section in the transfer list (pmzqla)</li>
<li>COSMETIC: Set minimum width of the left panel in the preferences (pmzqla)</li>
<li>OTHER: Optimize sorting of rows. This should have less CPU impact when many torrents are present. (Ivan Sorokin)</li>
<li>OTHER: Use the correct character encoding for exceptions coming from libtorrent. (sledgehammer999)</li>
<li>OTHER: Use boost:bind() as the docs show. Allows compilation with older gcc versions. (sledgehammer999)</li>
</ul>

<h3>Sunday September 21st 2014 - qBittorrent v3.1.10 release</h3>
<p>qBittorrent v3.1.10 was released. This is the last release for the 3.1.x series</p>
<ul>
<li>FEATURE: Allow disabling of OS cache. This will prevent RAM increases on Windows when seeding many files. Closes #1699. (sledgehammer999)</li>
<li>FEATURE: Add 'Completed' column. Closes #1241. (sledgehammer999)</li>
<li>FEATURE: Added 'Ratio Limit' column. Closes #936. (sledgehammer999)</li>
<li>FEATURE: Add 'Open' and 'Open Containing Folder' entries in the content's right-click menu. Closes #1143. (sledgehammer999)</li>
<li>FEATURE: Don't listen on IPv6 address by default. Prevents network connectivity problems. Closes #1880. (sledgehammer999)</li>
<li>FEATURE: Added 'Shutdown now' button in shutdown confirmation dialog. Closes #969. (sledgehammer999)</li>
<li>FEATURE: Add peer port column to PeerListWidget. Closes #1650. (Ivanov Juriy)</li>
<li>COSMETIC: Fix weird ratio values when torrent was imported or downloaded history was lost due to crash. (sledgehammer999)</li>
<li>COSMETIC: Use 'μTP' instead of 'uTP'. (sledgehammer999)</li>
<li>COSMETIC: Show the loaded torrents in the transferlist when qBT is launched with a torrent/magnet and the AddNewTorrentDialog is showing. Closes #1564. (sledgehammer999)</li>
<li>COSMETIC: Don't mix finished/unifinished torrents when sorting by ETA. Closes #1688. (sledgehammer999)</li>
<li>COSMETIC: Sort finished torrents by completed date when sorting by queue number. (sledgehammer999)</li>
<li>COSMETIC: Right align numerical values in the transfer list. Partially revert 51a9a9aab. Closes #1903. (sledgehammer999)</li>
<li>COSMETIC: Don't display the Search Engine tab by default. (sledgehammer999)</li>
<li>WINDOWS: Correctly associate torrents and magnet links with qBittorrent under non-admin accounts. Closes #291 #527 #579 #614 #964. (glassez, sledgehammer999)</li>
<li>WINDOWS: Check for python before creating the search engine tab. Prevents the creation of python specific files in the user's PC if no python is found. Closes #1370. (sledgehammer999)</li>
<li>WINDOWS: Don't create keys in the registry if python isn't found. Closes #1370. (sledgehammer999)</li>
<li>WINDOWS: Can now correctly detect 64bit and 32bit python installations on 64bit Windows. Closes #1148 #445 #795 #1708. (sledgehammer999)</li>
<li>WINDOWS: Search first in PATH for python. Closes #956. (sledgehammer999)</li>
<li>OSX: Enable system tray in MACOSX (Nick Korotysh).</li>
<li>OSX: Fix headless (nox) build. (sledgehammer999)</li>
<li>WEBUI: Correctly save/load settings and other improvements (glassez)</li>
<li>WEBUI: Removed broken 'Report a bug' iframe. Closes #1343 (Benjamin Hutchins)</li>
<li>WEBUI: Removed broken 'Documentation'. Improves fix for #1343 (Benjamin Hutchins)</li>
<li>WEBUI: Removed essentially useless 'Visit website' iframe and changed it to a regular link. Improves fix for #1343 (Benjamin Hutchins)</li>
<li>BUGFIX: Fix RSS feed icon. The tmp file gets deleted in the feed destructor. Closes #1639 (sledgehammer999)</li>
<li>BUGFIX: fix issue #1674: AddNewTorrentDialog is shown again and again even if checkbox "don't ask me again" is set (Ivan Sorokin)</li>
<li>BUGFIX: Don't show availability bar for magnet links (Ivan Sorokin)</li>
<li>BUGFIX: Fix crash when the selected torrent disappears from the transfer list. Closes #1661 (sledgehammer999)</li>
<li>BUGFIX: Fix tracker announcing problem(hit-and-run) when many torrents are being active. Closes #1571 (sledgehammer999)</li>
<li>BUGFIX: Count magnet links in the 'downloading' filter and make them prevent system inhibition. Closes #1558 (sledgehammer999)</li>
<li>BUGFIX: Pick up updated plugins. Closes #1745. (sledgehammer999)</li>
<li>BUGFIX: Bring mainwindow in front when notification is clicked and other windows are in front. (sledgehammer999)</li>
<li>BUGFIX: Speedup torrent moving (Ivan Sorokin)</li>
<li>BUGFIX: Fix bug when moving a torrent before the previous move is completed (Ivan Sorokin)</li>
<li>BUGFIX: Add option to hibernate computer in Auto-Shutdown menu (Bruno Barbieri)</li>
<li>BUGFIX: Fix column resizing issues (Bryan Roscoe)</li>
<li>BUGFIX: Fix possible crashes. Closes #1814. (sledgehammer999)</li>
<li>BUGFIX: Limit max cache to 1800MiB for 32bits compiled binaries and to 4GiB for other. Closes #1698. (sledgehammer999)</li>
<li>BUGFIX: Don't localize double numbers in the webui. Closes #1525. (sledgehammer999)</li>
<li>BUGFIX: Don't shrink transferlist rows when scrolling horizontally. Closes #1613. (sledgehammer999)</li>
<li>BUGFIX: When qBT is launched with a magnet don't show it in the transferlist while the metadata are being loaded in the background. (sledgehammer999)</li>
<li>BUGFIX: Show disk space while retrieving metadata. Closes #1693. (sledgehammer999)</li>
<li>BUGFIX: Don't disable DHT/LSD/UPnP in the GUI when anonymous mode is enabled. (sledgehammer999)</li>
<li>BUGFIX: Possible fix for crash in RSS code. Closes #1901. (sledgehammer999)</li>
<li>BUGFIX: Fixed SMTP emailing code (Ivanov Juriy, sledgehammer999)</li>
<li>BUGFIX: Don't display the context menu in 'Content' and 'HTTP Sources' buttons when no torrent is selected. It prevents crashes. Closes #1906, #1900. (sledgehammer999)</li>
<li>BUGFIX: Don't translate file extensions. Closes #1907. (sledgehammer999)</li>
<li>BUGFIX: Fix available disk space label on single file torrents. (sledgehammer999)</li>
<li>BUGFIX: Show stalled downloads that are uploading under the 'Active' filter. Closes #1654." (sledgehammer999)</li>
<li>BUGFIX: fix import torrent with "Keep incomplete torrents in:" enabled (lojack5)</li>
<li>BUGFIX: Send a spoofed user agent for the search engines(fixes some of them) (Martin Janco)</li>
<li>BUGFIX: Support URLs that redirect to magnet links (Gelmir)</li>
<li>BUGFIX: Consider queued items before deciding to 'auto-shutdown on downloads completion'. Closes #1942. (sledgehammer999)</li>
</ul>

<h3>Sunday August 10th 2014 - Bitcoin and Litecoin</h3>
<p>There are two new donations methods added. Now you can send money in Bitcoins and Litecoins too. PayPal donations will continue, but Bitcoins are preferred. Find the addresses in the main page.</p>
<p>I am really busy for the last few months in real life. Work towards 3.1.10 continues though. If you take a look at the git repo you will see what the new commits fix. 3.1.10 will be the last of the 3.1.x series. Some work has been done for the 3.2.x series, but serious development will begin after 3.1.10 has been released.</p>

<h3>Tuesday April 29th 2014 - qBittorrent v3.1.9.2 release</h3>
<p>qBittorrent v3.1.9.2 was released.</p>
<ul>
<li>OTHER: The v3.1.9.1 Windows build was broken</li>
</ul>

<h3>Monday April 28th 2014 - qBittorrent v3.1.9.1 release</h3>
<p>qBittorrent v3.1.9.1 was released.</p>
<ul>
<li>OTHER: This is an excuse to produce new builds with an OpenSSL version that isn't affected by the heartbleed bug for Windows and Mac. This bug should only affect the WebUI and only if HTTPS/SSL authentication was enabled.</li>
</ul>

<h3>Saturday March 1st 2014 - qBittorrent v3.1.9 release</h3>
<p>qBittorrent v3.1.9 was released.</p>
<ul>
<li>BUGFIX: Fix nox build. Closes #1368 (bob23450)</li>
<li>BUGFIX: Fix build with libtorrent 0.15.x (sledgehammer999)</li>
<li>BUGFIX: Fix missing percentage signs. Closes #1392. (sledgehammer999)</li>
<li>BUGFIX: Fix queue sorting order. (alfrix)</li>
<li>BUGFIX: Fix build using qt &lt; 4.7 Closes #1385. (Evgeny Lensky)</li>
<li>BUGFIX: Fix autoupdater. Send our user-agent to sourceforge.net (sledgehammer999)</li>
<li>FEATURE: Add button for links in toolbar (alfrix)</li>
</ul>

<h3>Sunday February 2nd 2014 - qBittorrent v3.1.8 release</h3>
<p>qBittorrent v3.1.8 was released.</p>
<ul>
<li>BUGFIX: Really fix build of v3.1.6</li>
</ul>

<h3>Sunday February 2nd 2014 - qBittorrent v3.1.7 release</h3>
<p>qBittorrent v3.1.7 was released.</p>
<ul>
<li>BUGFIX: Fix build of v3.1.6</li>
</ul>

<h3>Sunday February 2nd 2014 - qBittorrent v3.1.6 release</h3>
<p>qBittorrent v3.1.6 was released.</p>
<ul>
<li>BUGFIX: Fix 'preview file' regression. Closes #1285. (sledgehammer999)</li>
<li>BUGFIX: Fix peers and seeds sorting in transfer list. (Angel Alonso)</li>
<li>BUGFIX: Fix btdigg search engine. (BTDigg research team)</li>
<li>BUGFIX: Save statistics every 15min and only if there was new traffic. Fixes #1288 and partially #1272. (sledgehammer999)</li>
<li>BUGFIX: Fix share ratio text in the 'general' tab. (sledgehammer999)</li>
<li>BUGFIX: Output a more generic message when blocking IPs and don't use italics in the log. (sledgehammer999)</li>
<li>BUGFIX: Allow 2 decimals when setting the share ratio. Closes #1303. (sledgehammer999)</li>
<li>BUGFIX: Fix extratorrents search plugin. (sledgehammer999)</li>
<li>BUGFIX: Use shorter names for amount columns in main UI (Gelmir)</li>
<li>BUGFIX: Fix overstretched options dialog. Closes #1293. (sledgehammer999)</li>
<li>BUGFIX: Don't show a popup menu when no torrent is selected. (sledgehammer999)</li>
<li>BUGFIX: Launch external programs async and don't block. Closes #1252. (sledgehammer999)</li>
<li>BUGFIX: Don't re-announce to trackers when torrent is paused. Closes #1310. (sledgehammer999)</li>
<li>BUGFIX: Bring dialog boxes in the front when qbt doesn't have focus. (sledgehammer999)</li>
<li>BUGFIX: Correctly resize 'name' column of the content tab. Closes #1360. (sledgehammer999)</li>
<li>BUGFIX: Correctly restore 'name' column width when loading magnet links in the 'Add new torrent dialog'. Closes #1334. (sledgehammer999)</li>
<li>WEBUI: Fix sorting by size in WebUI when non-default locale used. (Vladimir Golovnev)</li>
<li>UI: Reposition statistics menu item. (sledgehammer999)</li>
<li>UI: Convert more accurately decimal numbers to text. (sledgehammer999)</li>
<li>WINDOWS/OSX: Improvements on the behavior of the program updater(closes #1282) (sledgehammer999)</li>
<li>LINUX: Explicitle tell that we don't support freedesktop's startup notify standard. Fixes GNOME issues. Closes #1217. (sledgehammer999)</li>
<li>LINUX: Add our WM_CLASS in the .desktop file so window managers know how to group our windows. (sledgehammer999)</li>
<li>OTHER: Sync translations from Transifex.</li>
</ul>

<h3>Thursday January 17th 2014 - qBittorrent v3.1.5 release</h3>
<p>qBittorrent v3.1.5 was released.</p>
<ul>
<li>BUGFIX: Fix compilation with Qt 4.7. Closes #1215. (sledgehammer999)</li>
<li>BUGFIX: Third attempt at fixing saving settings on OS shutdown. (sledgehammer999)</li>
<li>BUGFIX: Preview now correctly uses the selected file. Closes #1222 #1182. (sledgehammer999)</li>
<li>BUGFIX: Allow to resize the columns in Add New Torrent dialog. Closes #1207 #676 (sledgehammer999)</li>
<li>BUGFIX: Ensure that at least one column in the tranferlist is always visible. Closes #1165. (sledgehammer999)</li>
<li>BUGFIX: Ensure that the options window will always be placed onscreen. Closes #1226. (sledgehammer999)</li>
<li>BUGFIX: Delete temporary files after they aren't needed. Closes #1188. (sledgehammer999)</li>
<li>BUGFIX: Correctly detect libtorrent version. (sledgehammer999)</li>
<li>BUGFIX: Various code cppcheck fixes (Konstantin Goncharik)</li>
<li>BUGFIX: Remove isohunt search engine and update thepiratebay url (sledgehammer999)</li>
<li>BUGFIX: Fix rss settings corruption when checking regexp and going to other rule. (Gelmir)</li>
<li>BUGFIX: Don't count paused torrents for the autoshutdown. Closes #1280. (sledgehammer999)</li>
<li>LINUX: Fix notifications with xfce4-notifyd.</li>
<li>OSX: Added basic retina support. Closes #1251. (Sébastien Lavoie)</li>
<li>OTHER: Sync translations from Transifex.</li>
</ul>

<h3>Sunday December 29th 2013 - qBittorrent v3.1.4 release</h3>
<p>qBittorrent v3.1.4 was released.</p>
<ul>
<li>FEATURE: Statistics dialog (Gelmir)</li>
<li>FEATURE: Tooltips explaining each peer's connection flags (sledgehammer999)</li>
<li>FEATURE: Win/Mac Check for program updates every 15min and allow the user to manually check for updates through the help menu. (sledgehammer999)</li>
<li>BUGFIX: Better dialog message for torrent delete confirmation (sledgehammer999)</li>
<li>BUGFIX: Fix resizing grip location. Closes #1146. (sledgehammer999)</li>
<li>BUGFIX: Lock toolbar in place. Closes #1144. (sledgehammer999)</li>
<li>BUGFIX: Second attempt at fixing saving settings on shutdown. (sledgehammer999)</li>
<li>BUGFIX: Sort labels in 'Add new torrent' dialog. Closes #1150 #411. (sledgehammer999)</li>
<li>LINUX: Fix build under Ubuntu 13.10 (sledgehammer999)</li>
<li>LINUX: Make sleep and shutdown functions work on systemd's logind (Faheem Pervez)</li>
</ul>

<h3>Monday November 20th 2013 - qBittorrent v3.1.3 release</h3>
<p>qBittorrent v3.1.3 was released.</p>
<ul>
<li>FEATURE: Add a key shortcut to "Add link to torrent..." (Angel Alonso)</li>
<li>BUGFIX: Make all columns and headers use the same text alignment in the transferlist. (sledgehammer999)</li>
<li>BUGFIX: Fix build system for Unix/Linux. (sledgehammer999)</li>
<li>BUGFIX: Case insensitive sort in Peers list. Closes #1066. (sledgehammer999)</li>
<li>BUGFIX: Small optimization of WebUI responses when there isn't a data payload. (sledgehammer999)</li>
<li>BUGFIX: Hide empty folders after filtering. Closes #74. (sledgehammer999)</li>
<li>BUGFIX: Expand folders when filtering files. Closes #1076. (sledgehammer999)</li>
<li>BUGFIX: Updated search plugin's URL (wowzaman12)</li>
<li>BUGFIX: Strip some png to fix incorrect sRGB profiles. (Angel Alonso)</li>
<li>BUGFIX: Fixed font issues on OSX Mavericks (wowzaman12)</li>
<li>BUGFIX: Improve text in the About dialog (Artem S. Tashkinov)</li>
<li>BUGFIX: Always show a peer IP address as a tool tip (Artem S. Tashkinov)</li>
<li>BUGFIX: Fix inhibit system functionality. Closes #766. (sledgehammer999)</li>
<li>BUGFIX: WebUI: Don't gzip too small payloads. (sledgehammer999)</li>
<li>BUGFIX: Correctly detect if the browser supports gzip compression. (sledgehammer999)</li>
<li>BUGFIX: Fix WebUI link to 'Anonymous mode' explanation. Closes #1093. (sledgehammer999)</li>
<li>BUGFIX: Correctly update tracker tier number in the trackers tab. Closes #1075. (sledgehammer999)</li>
<li>BUGFIX: Speed improvements.(sledgehammer999)</li>
<li>OTHER: Updated translations.</li>
</ul>

<h3>Tuesday November 5th 2013 - qBittorrent v3.1.2 release</h3>
<p>qBittorrent v3.1.2 was released. It contains critical fixes.</p>
<ul>
<li>BUGFIX: Fix WebUI gzip compression. Closes #1037. (sledgehammer999)</li>
<li>BUGFIX: Fix compilation with qt &lt; 4.8.0. Closes #1043. (sledgehammer999)</li>
<li>OTHER: Updated translations.</li>
</ul>

<h3>Monday October 28th 2013 - qBittorrent v3.1.1.1 release</h3>
<p>qBittorrent v3.1.1.1 was released. This affects Windows only. It's the same as v3.1.1. It uses 0.16.12 which isn't broken. It is marked as 3.1.1.1 so the auto-update mechanism can work.</p>

<h3>Monday October 28th 2013 - Windows build is broken</h3>
<p>The v3.1.1 Windows build is broken. Don't download it from Sourceforge.net</p>

<h3>Monday October 28th 2013 - qBittorrent v3.1.1 release</h3>
<p>qBittorrent v3.1.1 was released.</p>
<ul>
<li>FEATURE: Show external IP in the log. Closes #968. (sledgehammer999)</li>
<li>FEATURE: Enable gzip compression in the webui. It should be faster now. (sledgehammer999)</li>
<li>FEATURE: Torrents show more states(queued for checking, downloading metadata, allocating, checking resume). (sledgehammer999)</li>
<li>FEATURE: Re-enable "force reannounce" to all trackers. (sledgehammer999)</li>
<li>FEATURE: Allow to clear the UI lock password. Closes #973. (sledgehammer999)</li>
<li>FEATURE: New translations: English(Australia) and English(United Kingdom)</li>
<li>BUGFIX: Expose all available translation in the WebUI. Closes #976. (sledgehammer999)</li>
<li>BUGFIX: Copy IP copied wrong data. Closes #970 (sledgehammer999)</li>
<li>BUGFIX: "Preview file..." didn't work on single file torrents. (sledgehammer999)</li>
<li>BUGFIX: Fix and improve the scheduler (Gelmir and sledgehammer999)</li>
<li>BUGFIX: RSS fixes. Closes #960, #998 (Gelmir)</li>
<li>BUGFIX: Fix 'append label to save path' with magnet links. (sledgehammer999)</li>
<li>BUGFIX: Can download up to 10MB .torrent file when a link is provided. Closes #879 (sledgehammer999)</li>
<li>OTHER: Updated translations.</li>
<li>LINUX: Fix missing conf.pri error (leigh123linux)</li>
<li>WINDOWS: Don't remove file associations if they aren't our own. (sledgehammer999)</li>
</ul>

<h3>Saturday October 12th 2013 - qBittorrent v3.1.0 release</h3>
<p>qBittorrent v3.1.0 was released today with a huge changelog. Enjoy!</p>
<ul>
<li>FEATURE: Add command line option to daemonize qbittorrent-nox (ngaro)</li>
<li>FEATURE: Add "Shutdown qBittorrent" button to Web UI (ngaro)</li>
<li>FEATURE: Add setting to copy .torrent files for finished downloads (Driim)</li>
<li>FEATURE: Add option to start qBittorrent on Windows startup (sledgehammer999)</li>
<li>FEATURE: Add context menu to Web seed list (Gelmir)</li>
<li>FEATURE: Add support for tracker tiers / groups to creator (Gelmir)</li>
<li>FEATURE: Allow clearing execution and ban logs (Gelmir)</li>
<li>FEATURE: Add option to use random port on each startup (ireallylikeher)</li>
<li>FEATURE: Expose the cache expiry to the user (Gelmir)</li>
<li>FEATURE: Support Atom feeds (Gelmir)</li>
<li>FEATURE: Add "save path" column (John Peterson)</li>
<li>FEATURE: Add μTorrent-compatible "Flags" column in the peer tab(sledgehammer999)</li>
<li>FEATURE: Load magnet metadata in the background while the "Add New Torrent" Dialog is showing (Gelmir)</li>
<li>FEATURE: Allow to enter only an info-hash for download(sledgehammer999)</li>
<li>FEATURE: Bring the "Add New Torrent" Dialog to the front(glassez)</li>
<li>BUGFIX: Add confirmation dialog for "Force recheck" action (closes #131)</li>
<li>BUGFIX: Greatly improve RSS manager performance (closes #34)</li>
<li>BUGFIX: Ensure that all columns in the tranferlist have a size > 0.</li>
<li>BUGFIX: Don't mark RSS item as read when it failed to download (Gelmir)</li>
<li>BUGFIX: Fix ETA calculation when some files are downloaded and marked afterwards as 'do not download'(sledgehammer999)</li>
<li>BUGFIX: Make the UI show that PEX/DHT/LSD are actually disabled on private torrents(sledgehammer999)</li>
<li>BUGFIX: Scheduler should be much more robust and correct now(sledgehammer999)</li>
<li>BUGFIX: Now qBt won't forget torrent settings after an unclean shutdown(sledgehammer999)</li>
<li>BUGFIX: Text boxes in edit dialogs will fit to text width(Gelmir)</li>
<li>BUGFIX: Enable edit/rename via F2 or double click in various places(Gelmir)</li>
<li>BUGFIX: Allow to edit trackers and copy their urls(Gelmir and Driim)</li>
<li>BUGFIX: Add Uploaded column to main view(Gelmir)</li>
<li>BUGFIX: Calculate ETA for seeding torrents(Gelmir)</li>
<li>BUGFIX: Add option to ignore global share ratio limits for created torrents(Gelmir)</li>
<li>OTHER: Many RSS bugfixes and improvements all over the place(Gelmir)</li>
<li>OTHER: Generate translations at configure time to reduce tarball size</li>
<li>OTHER: Make peer tab sortable by ip too (Gelmir)</li>
<li>OTHER: Translations moved to Transifex(https://www.transifex.com/projects/p/qbittorrent/)</li>
<li>OTHER: New Translation - Vietnamese (Anh Phan)</li>
<li>PERFORMANCE: Improve drawing speed of tranferlist when there are many torrents(>100)</li>
<li>PERFORMANCE: Improve drawing speed of peers list when there are many peers</li>
</ul>

<h3>Monday July 29th 2013 - qBittorrent v3.0.11 release</h3>
<p>qBittorrent v3.0.11 was released today and fixes several bugs.</p>
<ul>
<li>FEATURE: Allow more fine tuning of upload slots. It should improve speed (sledgehammer999)</li>
<li>FEATURE: Enable edit/rename via F2 or double click in various places (Gelmir)</li>
<li>BUGFIX: Fix Spanish and Basque translations being messed up on Windows (sledgehammer999)</li>
<li>BUGFIX: Don't allow newlines in rename dialog (Gelmir)</li>
<li>BUGFIX: Treat unfinished dates as the newest ones when sorting (sledgehammer999)</li>
<li>BUGFIX: Fix text size problem on Windows with custom DPI (sledgehammer999)</li>
<li>BUGFIX: Respect UI lock when clicking on tray notification (sledgehammer999)</li>
<li>BUGFIX: Fix kickass torrents search plugin (Gelmir)</li>
<li>BUGFIX: Use system language as default language. Closes #780 (sledgehammer999)</li>
<li>BUGFIX: Move completed files to .unwanted folder when they are unselected by the user (constantined)</li>
<li>BUGFIX: Show delete action when multiple feeds are selected (Gelmir)</li>
<li>BUGFIX: Use Unicode for libtorrent alert messages (Gelmir)</li>
<li>OTHER: Update translations</li>
<li>WINDOWS: Shave off ~4MB from the binary size (sledgehammer999)</li>
<li>WINDOWS: Remove wrong dependency on msvc2008 runtime (sledgehammer999)</li>
<li>WINDOWS: Disable stacktrace when building with mingw (Gelmir)</li>
<li>WINDOWS: Updated NSIS script to include/delete .pdb file. (sledgehammer999)</li>
</ul>

<h3>July 10th 2013 - qBittorrent v3.0.10 release</h3>
<p>qBittorrent v3.0.10 was released today and fixes several bugs.</p>
<ul>
<li>BUGFIX: Fix LegitTorrents search plugin</li>
<li>BUGFIX: Improve peer host name resolution (closes #360)</li>
<li>BUGFIX: Context menu fix in the Web UI</li>
<li>BUGFIX: Respect 'don't show' torrent dialog in Search (sledgehammer999)</li>
<li>BUGFIX: Torrent creator can now use files/folders from disk root (Gelmir)</li>
<li>BUGFIX: Update free disk space when changing drives in the add new torrent dialog (sledgehammer999)</li>
<li>BUGFIX: Various fixes relating to RSS drag and drop (Gelmir)</li>
<li>BUGFIX: Properly rename torrent which changes position in filter model (Gelmir)</li>
<li>BUGFIX: Actually show tray notifications when a torrent finishes downloading (sledgehammer999)</li>
<li>BUGFIX: Don't download RSS items based on rules still being edited (Gelmir)</li>
<li>COSMETIC: Native look for the search boxes (Hyperz)</li>
<li>IMPROVEMENT: Use natural sorting where possible (Gelmir and sledgehammer999)</li>
<li>LINUX: Drop Boost.Thread dependency from configure script</li>
<li>OTHER: Update translations.</li>
<li>OTHER: Drop obsolete Boost.Thread dependency from configure script on linux (Dumez)</li>
<li>LIBTORRENT: SOCKS5 fixes (0.16.10)</li>
<li>LIBTORRENT: Fix hanging issue on Windows when closing files (0.16.10)</li>
<li>LIBTORRENT: Cache can now be returned to the OS (0.16.10)</li>
<li>PERFORMANCE: Improve drawing speed of tranferlist when there are many torrents(>100) (sledgehammer999)</li>
<li>PERFORMANCE: Improve drawing speed of peers list when there are many peers (sledgehammer999)</li>
</ul>

<h3>July 7th 2013 - New qBittorrent maintainer</h3>
<p>qBittorrent from June 23rd 2013 has a new maintainer. Christophe Dumez, the original author, has stepped down and transferred the project maintenance to sledgehammer999. Read more <a href="http://qbforums.shiki.hu/index.php/topic,2009.0.html">here</a>.</p>

<h3>April 7th 2013 - New qBittorrent Ubuntu PPAs</h3>
<p>qBittorrent now has new Ubuntu PPA repositories with daily builds of qBittorrent, for both stable branch and trunk (development branch).</p>
<ul>
<li>Stable: <a href="http://launchpad.net/~hydr0g3n/+archive/qbittorrent-stable/">qBittorrent-stable</a></li>
<li>Unstable: <a href="http://launchpad.net/~hydr0g3n/+archive/qbittorrent-trunk/">qBittorrent-trunk</a></li>
</ul>

<h3>March 16th 2013 - qBittorrent v3.0.9 release</h3>
<p>qBittorrent v3.0.9 was released today and fixes several outstanding issues. Kuddos to everyone who helped squashing bugs!</p>
<ul>
<li>BUGFIX: Raise qBittorrent windows when another instance is launched</li>
<li>BUGFIX: Show human readable names for network interfaces in preferences (Windows)</li>
<li>BUGFIX: Fix torrent creator bug when saving non-latin path (Windows)</li>
<li>BUGFIX: Enable 'copy magnet uri' for torrents without metadata too</li>
<li>BUGFIX: Fix a few JSON parser issues (Gelmir)</li>
<li>BUGFIX: Add support for gzipped encoded HTTP responses (daimor)</li>
<li>BUGFIX: Fix possibly missing "Add torrent" icon (Driim)</li>
<li>OTHER: Add search plugin for Legit Torrents</li>
</ul>

<h3>January 20th 2013 - qBittorrent v3.0.8 release</h3>
<p>qBittorrent v3.0.8 was released today with several bug fixes.</p>
<ul>
<li>BUGFIX: Fix support for --no-splash command line argument</li>
<li>BUGFIX: Fix compilation error with libtorrent v0.15</li>
<li>BUGFIX: Fix search issues with Python3</li>
<li>BUGFIX: Fix dead link about certificates in program preferences</li>
</ul>

<h3>January 19th 2013 - qBittorrent v3.0.7 release</h3>
<p>qBittorrent v3.0.7 was released today with several bug fixes.</p>
<ul>
<li>BUGFIX: Update max write cache size to 2048MB and set it to automatic by default (closes #148)</li>
<li>BUGFIX: Add m4v to the list of previewable file extensions (closes #216)</li>
<li>BUGFIX: Fix "Couldn't set environment variable..." message on start up (closes #245)</li>
<li>BUGFIX: Use right path separator in torrent addition dialog on Windows</li>
<li>BUGFIX: Fix "Set as default save path" setting (closes #254)</li>
<li>BUGFIX: Re-enable disk cache on Windows since the memory issue seems to be gone</li>
<li>BUGFIX: Fixed several search engine plugins and removed the dead ones</li>
<li>BUGFIX: Use https links in search plugins when possible</li>
<li>BUGFIX: Bump Mootools to v1.4.5 (Web UI)</li>
<li>BUGFIX: Require password to exit qBittorrent from tray icon when locked (closes #311)</li>
<li>BUGFIX: Fix possible crash in loadPeers() (closes #222)</li>
</ul>

<h3>October 29th 2012 - FindMySoft Review</h3>
<p>FindMySoft created a quick look video showcasing of qBittorrent v3.0.5 and wrote a nice review.</p>
<a href="http://qbittorrent.findmysoft.com"><img src="img/review2_5_qBittorrent_award.png" alt="FindMySoft review"></a>

<h3>October 7th 2012 - qBittorrent v3.0.6 release</h3>
<p>qBittorrent v3.0.6 was released today with several bug fixes.</p>
<ul>
<li>BUGFIX: Fix unicode support for command-line arguments on Windows (closes #139)</li>
<li>BUGFIX: Do not store created torrent in memory before writing it to a file (closes #133)</li>
<li>BUGFIX: No longer fallback to ANY interface if the user-selected interface cannot be found (closes #143)</li>
<li>BUGFIX: Fix timezone parsing in RSS (closes #136)</li>
<li>BUGFIX: Fix cookie support for RSS feeds (closes #119)</li>
</ul>

<h3>September 30th 2012 - qBittorrent v3.0.5 release</h3>
<p>qBittorrent v3.0.5 was released today with several bug fixes.</p>
<ul>
<li>BUGFIX: Disabling systray icon no longer disables file association settings (closes #114)</li>
<li>BUGFIX: Import new trackers from magnet link in case of duplicate torrent (closes #111)</li>
<li>BUGFIX: Fix "Skip hash check" feature in torrent import dialog (closes #128)</li>
<li>BUGFIX: Several Web UI connection fixes</li>
<li>BUGFIX: Add Basque locale to Web UI</li>
</ul>

<h3>September 16th 2012 - qBittorrent v3.0.3 release</h3>
<p>qBittorrent v3.0.3 was released today with several bug fixes and a new translation (Hebrew).</p>
<ul>
<li>BUGFIX: Fix issue with temporary directory not being taken into consideration (closes #94)</li>
<li>BUGFIX: Address encoding issues when using search engine on Windows (closes #29)</li>
<li>BUGFIX: Bypass cache when uploading a torrent file in Web UI (closes #68)</li>
<li>BUGFIX: "Completed On" column is not updated until restart (closes #84)</li>
<li>BUGFIX: Fix possible build error on some systems</li>
<li>I18N: Add hebrew translation</li>
</ul>

<h3>September 1st 2012 - qBittorrent v3.0.2 release</h3>
<p>qBittorrent v3.0.2 was released today to address a few issues that people experienced.</p>
<ul>
<li>FEATURE: Add "clear" functionality to search field (closes #59)</li>
<li>BUGFIX: Attempt to use qBittorrent icon from theme if available (closes #49)</li>
<li>BUGFIX: Fix crash when a fastresume file is empty (closes #52)</li>
<li>BUGFIX: Fix encoding problem for detected XDG Download folder (closes #53)</li>
<li>BUGFIX: Improve performance when showing torrent content panel (Improves #24)</li>
<li>BUGFIX: Fix label-based filtering of torrents whose label contains special characters</li>
<li>BUGFIX: Fix possible crash due to labels (closes #64)</li>
</ul>

<h3>August 21st 2012 - qBittorrent v3.0.1 release</h3>
<p>A first bugfix release in the v3.0.x series was just uploaded in order
to address a few issues that were reported after the v3.0.0 release.</p>
<ul>
<li>BUGFIX: Fix possible crash when adding a tracker to a magnet torrent without metadata (Closes #1034254)</li>
<li>BUGFIX: Remember queue position for torrents without metadata (closes #17)</li>
<li>BUGFIX: Fix crash when using unauthorized characters in label names (closes #19)</li>
<li>BUGFIX: Fix search plugins updating (closes #25)</li>
<li>BUGFIX: Make uTP connections rate limited by default</li>
</ul>

<h3>August 9th 2012 - qBittorrent v3.0.0 final release</h3>
<p>qBittorrent v3.0.0 was finally released as stable today thanks to our team's hard work.</p>
<ul>
<li>FEATURE: Brand new torrent addition dialog</li>
<li>FEATURE: Add the ability to choose the save path when using magnet links (mutoso)</li>
<li>FEATURE: Add support for adding multiple local torrents at once (Web UI)</li>
<li>COSMETIC: Improve style of left panel</li>
<li>BUGFIX: Lower panels no longer gets disabled</li>
<li>BUGFIX: Major code refactoring and various optimizations</li>
<li>BUGFIX: No longer strip root folder from torrent files</li>
<li>OTHER: Drop support for libtorrent v0.14.x</li>
<li>OTHER: Drop support for Qt 4.5</li>
</ul>

<h3>July 1st 2012 - qBittorrent v3.0.0 release candidate</h3>
<p>I'm glad to announce that I uploaded today the first release candidate for
qBittorrent v3.0.0, the next major release of qBittorrent.</p>
<p>We encourage people to start testing this release candidate and help us iron out
the issues so that we can make a final release as soon as possible.</p>

<h3>July 1st 2012 - qBittorrent v2.9.11 release</h3>
<p>qBittorrent v2.9.11 was released today to bring a few bug fixes.</p>
<ul>
<li>BUGFIX: Fix unreversible "Minimize to tray" on some window managers</li>
<li>BUGFIX: Fix torrent availability computation (closes #988869)</li>
<li>BUGFIX: Bring window to front after restoring from systray</li>
<li>BUGFIX: Fix keyboard focus problems on main window (closes #1019563)</li>
<li>BUGFIX: Fix ThePirateBay search plugin</li>
</ul>

<h3>June 24th 2012 - qBittorrent v2.9.10 release</h3>
<p>qBittorrent v2.9.10 has been released to address several issues that have been reported recently.</p>
<ul>
<li>BUGFIX: Fix possible crash when showing torrent content (closes #1002586)</li>
<li>BUGFIX: Add support for RSS feeds using magnet links (closes #1016379)</li>
<li>BUGFIX: Remove 100kb limit for torrent file size in Web UI</li>
<li>BUGFIX: Fix ratio limiting bug (closes #835217)</li>
<li>BUGFIX: Do not display .!qB file extensions in Web UI</li>
<li>BUGFIX: Stop using absolute URLs in Web UI ajax requests (closes #1011226)</li>
<li>BUGFIX: Fix torrent association and loading on Mac OS X (closes #1011229)</li>
<li>BUGFIX: Fix unreversible "Minimize to tray" on some window managers (closes #917825)</li>
</ul>

<h3>May 5th 2012 - qBittorrent v2.9.8 release</h3>
<p>qBittorrent v2.9.8 was released to address a few compilation issues in several environments and polish the user interface a bit.</p>
<ul>
<li>BUGFIX: Various UI style fixes</li>
<li>BUGFIX: Fix compilation with gcc 4.7</li>
<li>BUGFIX: Fix possible compilation error with msvc (Windows)</li>
<li>BUGFIX: Fix compilation on OS/2</li>
<li>I18N: Update Italian translation</li>
</ul>

<h3>March 18th 2012 - qBittorrent v2.9.7 release</h3>
<p>qBittorrent v2.9.7 was released today in order to fix a few issues that have been
reported in the past weeks.</p>
<ul>
<li>BUGFIX: Fix download first/last pieces state reporting</li>
<li>BUGFIX: Fix name of progress column in torrent content panel</li>
<li>BUGFIX: Disable system tray icon on Mac OS X</li>
<li>BUGFIX: RSS downloader should not ignore "Do not start automatically" rule (closes #946910)</li>
<li>BUGFIX: Fix DHT port setting in Web UI (Closes #952182)</li>
<li>BUGFIX: Fix possible Web UI authentication problem when using SSL (closes #941343)</li>
<li>BUGFIX: Fix possible issues with folder removal when removing a torrent</li>
<li>I18N: Add Basque translation</li>
</ul>

<h3>February 18th 2012 - qBittorrent v2.9.5 release</h3>
<p>qBittorrent v2.9.5 was released today to fix a few issues that have been reported
recently.</p>
<p>Also note that the project source code has moved from Gitorious to <a href="http://git.qbittorrent.org">Github</a>.</p>
<ul>
<li>BUGFIX: qBittorrent does not handle redirection to relative URLs correctly (Closes #919905)</li>
<li>BUGFIX: Cmd+M minimizes main window on Mac OS X (Closes #928216)</li>
<li>BUGFIX: Cmd+Del removes torrents on Mac OS X (Closes #928852)</li>
<li>BUGFIX: Fix potential bug when moving single file torrents to tmp folder (closes #932861)</li>
<li>BUGFIX: Fix torrent import dialog layout (Closes #930932)</li>
<li>BUGFIX: Prevent log window buffer from filling up (Closes #929673)</li>
<li>BUGFIX: Fix crash when disabling then reenabling RSS</li>
<li>BUGFIX: Fix duplicate torrent detection when adding a magnet link</li>
<li>BUGFIX: Fix import of new trackers when adding a torrent with same hash (Closes #747000)</li>
<li>BUGFIX: Fix possible redownload of torrents marked as read (Closes #927495)</li>
<li>BUGFIX: Properly remove RSS feed settings/history upon feed removal</li>
<li>I18N: Add Belarusian translation</li>
</ul>

<h3>December 29th 2011 - qBittorrent v2.9.3 release</h3>
<p>qBittorrent v2.9.3 has been released today after a "short" break in development.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Fix btdigg plugin (Python3 support + torrent name in magnet links)</li>
<li>BUGFIX: Fix banning of IPv6 peers (Closes #885021)</li>
<li>BUGFIX: Fix torrent addition dialog layout problem (Closes #84650522)</li>
<li>BUGFIX: Do not report any progress for disabled files (Closes #56731485)</li>
<li>BUGFIX: Make torrent sorting case insensitive (Closes #857154)</li>
<li>BUGFIX: Improve Web UI usability of small devices</li>
<li>BUGFIX: Program updater: More reliable version detection / comparison</li>
<li>I18N: Add Georgian translation</li>
</ul>

<h3>October 29th 2011 - qBittorrent v2.9.2 release</h3>
<p>qBittorrent v2.9.2 has just been uploaded to fix an annoying issue with the torrent addition dialog dimensions and to reduce the number of dependencies.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Fix minimum dimensions for torrent addition dialog</li>
<li>BUGFIX: Remove dependency on boost-datetime</li>
<li>BUGFIX: Remove dependency on boost-filesystem (libtorrent v0.16.x)</li>
</ul>

<h3>October 23rd 2011 - qBittorrent v2.9.1 release</h3>
<p>Here comes the first bugfix release in the v2.9.x series. Although very stable, we did find
a few regressions that needed fixing.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Add support for speed limits scheduling (Web UI)</li>
<li>BUGFIX: Fix ratio calculation for purely seeded torrents</li>
<li>I18N: Update Russian translation</li>
<li>COSMETIC: Torrent addition dialog layout fixes</li>
</ul>

<h3>October 8th 2011 - qBittorrent v2.9.0 release</h3>
<p>qBittorrent v2.9.0 was released today with nice new features and a lot of polishing, enjoy!</p>
<p>Thanks a lot to the people who helped make this release come to life.</p>
<p>Changelog:</p>
<ul>
<li>FEATURE: Add file association settings to program preferences (Windows)</li>
<li>FEATURE: Add setting to ignore slow torrents in queueing system</li>
<li>FEATURE: Add advanced setting to announce to all trackers</li>
<li>FEATURE: Add support for anonymous mode (libtorrent >= v0.16)</li>
<li>FEATURE: Add quick "set as default save path" checkbox to torrent addition dialog (sledgehammer999)</li>
<li>BUGFIX: Add tray menu entry for toggling window visibility</li>
<li>BUGFIX: Fix execution log lines selection and copying</li>
<li>BUGFIX: Reduce CPU usage when running Web UI</li>
<li>BUGFIX: Save RSS items to disk regularly for safety</li>
<li>BUGFIX: Fix ratio calculation (use all_time_download)</li>
<li>BUGFIX: Fix torrent upload issues (Web UI)</li>
<li>BUGFIX: Fix some IE incompatibilities (Web UI)</li>
<li>COSMETIC: Display speed at the beginning of the Window title</li>
<li>COSMETIC: Several cosmetic fixes to the Web UI</li>
<li>COSMETIC: Make top toolbar follow system style</li>
<li>OTHER: Display libraries versions in about dialog (sledgehammer999)</li>
<li>OTHER: Display qBittorrent version in Web UI about dialog</li>
</ul>

<h3>September 12th 2011 - qBittorrent v2.8.5 release</h3>
<p>qBittorrent v2.8.5 was released today to address a few issues that were reported over the holidays.</p>
<p>ArchLinux users will be happy to know that this version finally supports Python 3.x, making the search engine available to them too.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Fix encryption setting saving in Web UI</li>
<li>BUGFIX: Fix "Copy torrents to" setting saving in Web UI</li>
<li>BUGFIX: Announce to all trackers in a tier to avoid stalling issues</li>
<li>BUGFIX: Make search engine work with Python 3.x</li>
<li>BUGFIX: Fix search engine plugins update tool</li>
<li>BUGFIX: Fix KickAssTorrents search plugin</li>
</ul>

<h3>August 9th 2011 - qBittorrent v2.8.4 release</h3>
<p>qBittorrent v2.8.4 was released today with some additional bug fixes and improvements.</p>
<p>qBittorrent v2.8.x seems pretty stable now so I'll start working on the next major release: v2.9.0.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Added back ability to reorder trackers</li>
<li>BUGFIX: Do not announce to all trackers in the same tier to comply with the multi-tracker specification</li>
<li>BUGFIX: Fix torrent addition dialog geometry saving</li>
</ul>

<h3>August 2nd 2011 - qBittorrent v2.8.3 release</h3>
<p>qBittorrent v2.8.3 was just released with a few bug fixes. Libtorrent-rasterbar v0.15.7 was also recently released.</p>
<p>Changelog:</p>
<ul>
<li>BUGFIX: Fix memory usage problem in log tab</li>
<li>BUGFIX: Make sure the main window is not hidden on startup if no system tray icon is available</li>
</ul>

<h3>June 19th 2011 - qBittorrent on Gitorious</h3>
<p>We have decided to move qBittorrent source code to <a href="https://gitorious.org/qbittorrent">Gitorious</a> and to use GIT instead of SVN. We are hoping this will facilitate code contributions through merge requests and GIT patches.</p>
<p>We need more people contributing code, the development team is way too small at the moment.</p>
<p>The bug tracker is still on <a href="http://bugs.qbittorrent.org">Launchpad</a>, and the file releases will stay on <a href="https://sourceforge.net/projects/qbittorrent/files/">Sourceforge</a> for now.</p>
<p>I would also like to move the Website to use an engine such as Wordpress or Drupal to facilitate editing. I - however - do not have the spare time to take on this task right now. If anybody is interested in working on this, please contact <a href="mailto:chris@qbittorrent.org">me</a>.</p>

<h3>June 18th 2011 - qBittorrent v2.8.2 release</h3>
<p>We have just uploaded qBittorrent v2.8.2 to fix a few minor issues.</p>
<p>qBittorrent v2.8.1 to v2.8.2 changelog:</p>
<ul>
<li>BUGFIX: Fix tracker exchange advanced setting</li>
<li>BUGFIX: Fix Proxy authentication settings</li>
<li>BUGFIX: Fix possible status filters widget height problem</li>
<li>FEATURE: Show tracker tier (order) in tracker list</li>
</ul>

<h3>June 5th 2011 - qBittorrent v2.8.1 release</h3>
<p>We have just release qBittorrent v2.8.1 to fix an annoying bug in v2.8.0. Users were unable to change the Web UI username / password from the Web UI which represents a security risk, especially for nox users.</p>
<p>qBittorrent v2.8.0 to v2.8.1 changelog:</p>
<ul>
<li>BUGFIX: Fix Web UI username/password change (Web UI)</li>
</ul>

<h3>June 2nd 2011 - qBittorrent v2.8.0 release</h3>
<p>A new major release of qBittorrent was released today: v2.8.0. The first version of qBittorrent which support the next libtorrent v0.16 (with uTP support).</p>
<p>qBittorrent v2.7.x to v2.8.0 changelog:</p>
<ul>
<li>FEATURE: Added full libtorrent v0.16 support (uTP, ...)</li>
<li>FEATURE: Proxy can be disabled for peer connections</li>
<li>FEATURE: Added support for secure SMTP connection (SSL)</li>
<li>FEATURE: Added support for SMTP authentication</li>
<li>FEATURE: Added UPnP/NAT-PMP port forward for the Web UI port</li>
<li>FEATURE: qBittorrent can update dynamic DNS services (DynDNS, no-ip)</li>
<li>FEATURE: Display peer connection type in peer list (BT, uTP, Web)</li>
<li>FEATURE: Added full regex support to RSS downloader</li>
<li>FEATURE: Added regex help and validation in RSS downloader</li>
<li>FEATURE: Added HTTPS support to Web UI (Ishan Arora)</li>
<li>BUGFIX: Change systray icon on the fly (no restart needed)</li>
<li>BUGFIX: Remember peer-level rate limits (requires libtorrent v0.16)</li>
<li>BUGFIX: Stop announcing to trackers an all tiers (more respectful)</li>
<li>BUGFIX: Stop sharing private trackers with other peers</li>
<li>BUGFIX: Tracker exchange extension can be disabled</li>
<li>BUGFIX: Cleaner program exit on system log out</li>
<li>BUGFIX: Fix possible magnet link parsing problems</li>
<li>BUGFIX: Fix possible RSS URL parsing problems</li>
<li>COSMETIC: Added monochrome icon for light themes</li>
</ul>

<h3>April 16th 2011 - qBittorrent v2.7.3 and v2.8.0beta3 uploads</h3>
<p>I have just uploaded qBittorrent v2.7.3. It fixes a few bugs (including one potentially important) and improves performance.</p>
<p>Development is also progressing on v2.8.0 with a new beta release.</p>
<p>qBittorrent v2.7.2 to v2.7.3 changelog:</p>
<ul>
<li>FEATURE: Added search plugin for btdigg.org (From BTDigg research team)</li>
<li>BUGFIX: Do not delete unwanted files that were already present when adding the torrent</li>
<li>BUGFIX: Fix URL decoding in search engine</li>
<li>BUGFIX: Trackers can now be added to torrents without metadata</li>
<li>BUGFIX: Fix initialization problem with some private trackers</li>
<li>BUGFIX: Fix crash in RSS downloader</li>
<li>BUGFIX: Make sure assertions are disabled in release mode</li>
</ul>

<h3>April 5th 2011 - qBittorrent v2.7.2 release</h3>
<p>qBittorrent v2.7.2 has just been uploaded. It brings a few important bug fixes.</p>
<p>qBittorrent v2.7.1 to v2.7.2 changelog:</p>
<ul>
<li>BUGFIX: Uninhibit system sleep on exit (Vladimir Golovnev)</li>
<li>BUGFIX: Fix error on Windows when qBittorrent is shutdown by session manager (Vladimir Golovnev)</li>
<li>BUGFIX: Fix alternative speeds tooltip</li>
<li>BUGFIX: Parse URLs in torrent description</li>
<li>BUGFIX: Make sure python is not required on startup (Windows)</li>
<li>BUGFIX: Use ConsoleKit to shutdown the system instead of HAL (deprecated)</li>
<li>BUGFIX: use UPower to suspend the system instead of HAL (deprecated)</li>
<li>BUGFIX: Rewrote computer shutdown/suspend code to avoid data loss</li>
<li>OTHER: Get rid of libnotify dependency (Use DBus instead)</li>
</ul>

<h3>March 26th 2011 - qBittorrent v2.7.1 release</h3>
<p>qBittorrent v2.7.1 was released today. It ships a few bug fixes and a lot of translations updates.</p>
<p>qBittorrent v2.7.0 to v2.7.1 changelog:</p>
<ul>
<li>BUGFIX: Limit file names to 255 bytes to avoid issues on Linux FS</li>
<li>BUGFIX: Fix possible crash when changing the priority of a file</li>
<li>BUGFIX: Magnet link association fix on Win32 (sledgehammer999)</li>
<li>BUGFIX: Easier compilation on Win32 using MinGW (sledgehammer999)</li>
<li>BUGFIX: Sync program preferences before computer shutdown to avoid loss</li>
<li>OTHER: Get rid of QtSVG dependency</li>
<li>I18N: Updated German, Italian, Hungarian, Portuguese, Brazilian, Spanish and Catalan translations</li>
</ul>

<h3>March 20th 2011 - qBittorrent v2.7.0 release</h3>
<p>qBittorrent v2.7.0 was released with a few interesting new features and some more polishing.</p>
<p>As you can see from the changelog, the project is attracting some new developers, which is excellent news.
A big thanks to Vladimir Golovnev, Christian Kandeler and Ville Kiiskinen for their contribution.</p>
<p>qBittorrent v2.6.9 to v2.7.0 changelog:</p>
<ul>
<li>FEATURE: Added search field for torrent content</li>
<li>FEATURE: Added auto-shutdown confirmation dialog</li>
<li>FEATURE: Added option to skip torrent deletion confirmation (Ville Kiiskinen)</li>
<li>FEATURE: IP address reported to trackers is now customizable</li>
<li>FEATURE: Inhibit system sleep when torrents are active (Vladimir Golovnev)</li>
<li>FEATURE: Added option to bypass Web UI authentication for localhost</li>
<li>FEATURE: Added option to disable program exit confirmation</li>
<li>FEATURE: Added per-torrent ratio limiting (Christian Kandeler)</li>
<li>FEATURE: Torrent content list is now sortable</li>
<li>BUGFIX: Fix compilation with namespaced Qt (Christian Kandeler)</li>
<li>BUGFIX: Added length restriction on UI lock password</li>
<li>COSMETIC: Added monochrome tray icon</li>
<li>COSMETIC: Improved status bar's style</li>
<li>OTHER: Make QtDBus dependency optional (X11)</li>
</ul>

<h3>March 13th 2011 - qBittorrent v2.6.9 release</h3>
<p>qBittorrent v2.6.9 has been released today with a few more bug fixes. We are also making good progress on v2.7.0
and it should be ready soon.</p>
<p>qBittorrent v2.6.7 to v2.6.9 changelog:</p>
<ul>
<li>BUGFIX: Fix compilation with libtorrent v0.14.x</li>
<li>BUGFIX: Fix issues when writing on NTFS (Linux, Mac)</li>
<li>BUGFIX: Fix root folder being cut off if the torrent comes from a scanned folder (Christian Kandeler)</li>
<li>BUGFIX: Improve folder removal behavior</li>
<li>BUGFIX: Make sure the .unwanted folder is deleted on soft torrent removal</li>
<li>BUGFIX: Indicate support for Magnet links in desktop file (Fisiu)</li>
<li>BUGFIX: Do not report torrent being checked as queued</li>
<li>BUGFIX: Improve lists columns state saving</li>
</ul>

<h3>February 26th 2011 - qBittorrent v2.6.7 release</h3>
<p>qBittorrent v2.6.7 was just released to fix a few bugs (most of them on Windows).</p>
<p>qBittorrent v2.6.6 to v2.6.7 changelog:</p>
<ul>
<li>BUGFIX: Encoding fixes (Windows)</li>
<li>BUGFIX: Fix "append label to save path" (Windows)</li>
<li>BUGFIX: Disable OS cache for aligned files to reduce memory consumption</li>
<li>BUGFIX: Fix torrent upload from Web UI (Windows)</li>
<li>BUGFIX: Fix cursor problem in torrent addition dialog</li>
<li>BUGFIX: Fix crash when additing an empty tracker URL</li>
<li>BUGFIX: Share ratio can now go over 100</li>
<li>BUGFIX: Fix compilation with boost >= v1.46</li>
</ul>

<h3>February 8th 2011 - qBittorrent v2.6.6 release</h3>
<p>qBittorrent v2.6.6 was just released. It brings a few bug fixes including some important ones for Windows. It also features a few cosmetic improvements.</p>
<p>qBittorrent v2.6.5 to v2.6.6 changelog:</p>
<ul>
<li>FEATURE: IP address reported to trackers is now customizable</li>
<li>BUGFIX: Use slashes instead of antislashes in URLs (Windows)</li>
<li>BUGFIX: Fix articles read state reset problem in RSS</li>
<li>BUGFIX: Fix possible path encoding issues on Windows</li>
<li>BUGFIX: Fix downloads from URLs on Windows</li>
<li>I18N: Added Lithuanian translation</li>
<li>COSMETIC: Improve main window layout</li>
<li>COSMETIC: Improve properties buttons style</li>
<li>COSMETIC: Display pieces being downloaded in green instead of yellow</li>
<li>COSMETIC: Improve piece availability bar appearance</li>
</ul>

<h3>February 3rd 2011 - qBittorrent v2.6.5 release</h3>
<p>qBittorrent v2.6.5 was released today, a bit late due to the recent problems experienced by SourceForge. Exceptionally, this bugfix release includes a major code rewrite of the RSS functionality. Indeed, this part of the code was less than optimal and was becoming very difficult to improve or even maintain. This rewrite results, according to initial reports, in a more stable experience and less CPU / memory usage when using RSS in qBittorrent.</p>
<p>Special thanks to Vladimir Golovnev who helped again to improve system integration and bug fixing. We are also glad to announce that Tomaso is joining the team as Norwegian translator, replacing Lars-Erik Labori who left quite a long time ago.</p>
<p>qBittorrent v2.6.4 to v2.6.5 changelog:</p>
<ul>
<li>BUGFIX: Make sure the progress is not 100% unless the file is complete</li>
<li>BUGFIX: Fix memory leak in HTTP torrent downloader</li>
<li>BUGFIX: Use native file dialogs (by Vladimir Golovnev)</li>
<li>BUGFIX: Fix encoding problem in torrent moving code (by Vladimir Golovnev)</li>
<li>BUGFIX: Performance improvement on ARM</li>
<li>BUGFIX: RSS code rewrite (more cpu/memory efficient)</li>
<li>I18N: Updated Norwegian translation (Tomaso)</li>
</ul>

<h3>January 23rd 2011 - qBittorrent v2.6.4 release</h3>
<p>qBittorrent v2.6.4 was released today. It brings quite a few fixes and improvements.</p>
<p>Special thanks to Vladimir Golovnev who helped fix bugs for this release.</p>
<p>qBittorrent v2.6.3 to v2.6.4 changelog:</p>
<ul>
<li>BUGFIX: Added unicode support to email notification</li>
<li>BUGFIX: Improved compatibility with various SMTP servers</li>
<li>BUGFIX: Fix Labeling in RSS downloader</li>
<li>BUGFIX: Avoid main window flashing on startup (closes #703984)</li>
<li>BUGFIX: Improved hostname resolution code</li>
<li>BUGFIX: Dropped dependency on libboost-thread</li>
<li>BUGFIX: Display legal notice on screen center</li>
<li>BUGFIX: Fix renaming of single-file torrents (by Vladimir Golovnev)</li>
<li>I18N: More dialog buttons are now translated (by Vladimir Golovnev)</li>
<li>I18N: Fix translation of size units (by Vladimir Golovnev)</li>
</ul>

<h3>January 15th 2011 - qBittorrent v2.6.3 release</h3>
<p>qBittorrent v2.6.3 was just released. It is recommended to update since it fixes potential crashes and brings further polishing</p>
<p>qBittorrent v2.6.2 to v2.6.3 changelog:</p>
<ul>
<li>BUGFIX: Fix possible crashes in full allocation mode</li>
<li>BUGFIX: Fix icon size issues (Linux, icon theme)</li>
<li>BUGFIX: Fixed file priority context menu</li>
<li>BUGFIX: Remove dbus dependency in nox mode</li>
<li>BUGFIX: Fix compilation on FreeBSD</li>
<li>I18N: Improve Web UI translation</li>
<li>I18N: Updated Polish translation</li>
</ul>

<h3>January 12th 2011 - qBittorrent v2.6.2 release</h3>
<p>I have just uploaded qBittorrent v2.6.2 which brings a few important bug fixes as well as translation update/fixes.</p>
<p>qBittorrent v2.6.1 to v2.6.2 changelog:</p>
<ul>
<li>BUGFIX: Do not report PeX as being disabled when DHT is</li>
<li>BUGFIX: Fix possible crash on adding magnet links</li>
<li>BUGFIX: Fix torrent import (was not working)</li>
<li>I18N: Updated Greek, Croatian, Russian, Unkrainian and Bulgarian translations</li>
<li>I18N: Added Armenian translation (New)</li>
<li>I18N: Remove country flags from program preferences (language selection)</li>
<li>I18N: Translate locale names (language selection)</li>
</ul>

<h3>January 10th 2011 - qBittorrent v2.6.1 release</h3>
<p>Here comes a first bugfix release for qBittorrent v2.6. It brings some more polishing to the UI as well as a few minor fixes.</p>
<p>qBittorrent v2.6.0 to v2.6.1 changelog:</p>
<ul>
<li>BUGFIX: Really disable torrent addition dialog by default</li>
<li>BUGFIX: Fix some missing icons in the Web UI</li>
<li>BUGFIX: Fix magnet torrent name update problem</li>
<li>COSMETIC: Use 24px size for toolbar icons and reduce spacing</li>
<li>COSMETIC: Move transfer list filter on the right side of the toolbar</li>
</ul>

<h3>January 9th 2011 - qBittorrent v2.6.0 final release</h3>
<p>I'm pleased to announce the final release of qBittorrent v2.6.0. This new major release brings a few new interesting features, more polishing and fixes some long-standing limitations.</p>
<p>qBittorrent v2.5.5 to v2.6.0 changelog:</p>
<ul>
<li>FEATURE: Use system icons (Linux, Qt >= 4.6)</li>
<li>FEATURE: Improved ETA calculation</li>
<li>FEATURE: Simplify program preferences</li>
<li>FEATURE: Software update check can now be disabled (Mac OS X / Windows)</li>
<li>FEATURE: Display pieces size in torrent properties</li>
<li>FEATURE: Added "Time Active/Seeded" column to transfer list</li>
<li>FEATURE: Give feedback regarding the IP filter parsing</li>
<li>FEATURE: Added a button to reload the IP filter</li>
<li>FEATURE: Search engine results can now be opened in a Web browser</li>
<li>FEATURE: Added a search engine plugin to extratorrent.com</li>
<li>FEATURE: Added a search engine plugin for kickasstorrents.com</li>
<li>FEATURE: Added auto-suspend upon downloads completion feature</li>
<li>BUGFIX: Hide unwanted files that have to be partly downloaded</li>
<li>BUGFIX: Do not allocate space for unwanted files (preallocation mode)</li>
<li>I18N: Added Galician translation</li>
<li>COSMETIC: Same deletion confirmation dialog in the GUI and Web UI</li>
<li>COSMETIC: Simplified the top toolbar</li>
<li>COSMETIC: Display execution log as a tab instead of a modal window</li>
</ul>

<h3>January 6th 2011 - qBittorrent v2.5.5 and v2.6.0rc1 release</h3>
<p>I have just uploaded both v2.5.5 to fix a few outstanding issues and a first release candidate for v2.6.0.</p>
<p>qBittorrent v2.5.3 to v2.5.5 changelog:</p>
<ul>
<li>BUGFIX: Added --enable-debug parameter to the configure script</li>
<li>BUGFIX: Prioritize first and last pieces when sequential download is enabled</li>
<li>BUGFIX: Some encoding fixes (Windows)</li>
<li>BUGFIX: Display default password on stdout when using nox</li>
<li>BUGFIX: Fix issues when search engines results contain a '|'</li>
<li>BUGFIX: Avoid possible crash on exit when the IP filter is enabled (closes #695945)</li>
</ul>

<h3>January 1st 2011 - qBittorrent v2.5.3 release</h3>
<p>Happy new year to you all! I have just uploaded qBittorrent v2.5.3 with a few bug fixes.</p>
<p>qBittorrent v2.5.2 to v2.5.3 changelog:</p>
<ul>
<li>BUGFIX: Fix priority up/down for multiple torrents at the same time (closes #692184)</li>
<li>BUGFIX: Make sure the number of torrents is properly set on startup (closes #694135)</li>
<li>BUGFIX: Fix scan directories saving (closes #694768)</li>
<li>BUGFIX: Remove empty folders on torrent soft deletion (closes #695174)</li>
<li>BUGFIX: Make sure the main window has focus on startup</li>
<li>BUGFIX: Fix ampersand display in search tabs (closes #695715)</li>
</ul>

<h3>December 19th 2010 - qBittorrent v2.5.2 release</h3>
<p>qBittorrent v2.5.2 was just uploaded, as well as a first beta for v2.6.0. v2.6.0beta1 finally brings support for the system theme icons and also uses an improved ETA calculation algorithm.</p>
<p>qBittorrent v2.5.1 to v2.5.2 changelog:</p>
<ul>
<li>BUGFIX: Fix alternative speed icon staying pressed when disabled</li>
<li>BUGFIX: Fix slot warning on startup</li>
<li>BUGFIX: Fix alignment issues in program preferences</li>
<li>BUGFIX: Make sure we don't move completed torrent to the temp directory for checking (closes #602938)</li>
<li>BUGFIX: Fix some 'File Not found' warning in the Web UI</li>
<li>BUGFIX: Fix dangerous usage of vector iterator</li>
<li>BUGFIX: No longer expand the first folder in the torrent content list</li>
<li>BUGFIX: Fixes possible crash in the RSS Downloader dialog (closes #691426)</li>
</ul>

<h3>December 5th 2010 - qBittorrent v2.5.1 release</h3>
<p>After a long period of code refactoring and testing, we are glad to announce the release of qBittorrent v2.5.0. This major release brings a lot of new features as well as important performance improvements.</p>
<p>qBittorrent v2.4.11 to v2.5.1 changelog:</p>
<ul>
<li>FEATURE: qBittorrent can now act as a tracker</li>
<li>FEATURE: New and improved RSS feed automated downloader</li>
<li>FEATURE: Added feature to shutdown qbittorrent on torrents completion</li>
<li>FEATURE: Added a torrent import assistant to seed or keep downloading outside torrents</li>
<li>FEATURE: qBittorrent can update itself from Sourceforge (Windows/Mac OS X only)</li>
<li>FEATURE: Added a transfer list column to display the current tracker</li>
<li>FEATURE: Remember the last trackers used in the torrent creation tool</li>
<li>FEATURE: The optimal piece size is now automatically computed in the torrent creation tool</li>
<li>FEATURE: Bring up the connection settings when clicking on the connection status icon</li>
<li>FEATURE: Major code refactoring and optimization</li>
<li>FEATURE: Added "Amount downloaded/left" columns to transfer list</li>
<li>FEATURE: Simplified proxy settings</li>
<li>FEATURE: Optimized and improved the peer country resolution code</li>
<li>FEATURE: Download first/last pieces first when sequential download is enabled (Thanks Ahmad)</li>
<li>FEATURE: Download first/last pieces first now applies to all media files in the torrent (Thanks Ahmad)</li>
<li>BUGFIX: Fix SOCKS5 proxy authentication in search engine(closes #680072)</li>
<li>BUGFIX: Fix two advanced settings (ignore limits on LAN and protocol overhead inclusion in rate limiter)</li>
<li>BUGFIX: Fix strict super seeding (was not working)</li>
<li>BUGFIX: Improve magnet save path handling (closes #683395)</li>
<li>BUGFIX: Disable overwrite confirmation in torrent addition dialog (closes # 685269)</li>
<li>COSMETIC: Replaced message box by on-screen notification for download errors</li>
<li>COSMETIC: Improved the torrent creation tool appearance</li>
<li>COSMETIC: Use country flags by Mark James (Thanks to Dmytro Pukha)</li>
<li>COSMETIC: Use bigger alternative speed icon</li>
<li>OTHERS: Dropped support for Qt &lt;= 4.4</li>
</ul>

<h3>November 21st 2010 - qBittorrent v2.4.11 and v2.5.0beta6 releases</h3>
<p>qBittorrent v2.4.11 has just been released. It will be the last bugfix release for the v2.4.x series as v2.5.0 is almost ready.
Regarding the next major release - v2.4.5 - it is now in feature freeze and I have uploaded today a sixth beta release.
</p><p>I hope some users will have a chance to test this beta and report issues to help us stabilize.
A big part of qBittorrent has been rewritten for v2.5.0 with the objectives to bring important performance improvements and to reduce the risk of introducing bugs.</p>
<p>qBittorrent v2.4.10 to v2.4.11 changelog:</p>
<ul>
<li>BUGFIX: Do not report a progress of 100% in the Web UI unless the torrent is really complete (closes #674349)</li>
<li>BUGFIX: Fix possible incorrect behavior with queueing</li>
<li>BUGFIX: Fix RSS refresh interval saving</li>
<li>BUGFIX: Fix possible crash when setting RSS proxy (closes #676288)</li>
<li>BUGFIX: Fix HTTP redirect issue that would cause the torrent addition to show up for automated RSS downloads (Closes #677565)</li>
</ul>

<h3>November 10th 2010 - qBittorrent v2.4.10 release</h3>
<p>I have just uploaded qBittorrent v2.4.10 to fix remaining outstanding issues. I am also working really hard to get v2.5.0 ready but I very little free time unfortunately.</p>
<p>qBittorrent v2.4.9 to v2.4.10 changelog:</p>
<ul>
<li>BUGFIX: Fix possible crash when selecting a RSS item (really closes #575624)</li>
<li>BUGFIX: Improved IPv6 support (IP filter and Peer list)</li>
<li>BUGFIX: Make IP filter more tolerant towards strangely formatted IPs</li>
<li>BUGFIX: More reliable folder scanning</li>
<li>BUGFIX: Do not create the torrent root folder at final destination if torrent is in the temp dir (closes #673271)</li>
<li>BUGFIX: Fix compilation with libnotify v0.7.0 (closes #671769)</li>
<li>BUGFIX: Use a pointing cursor over status bar buttons</li>
</ul>

<h3>October 31st 2010 - qBittorrent v2.4.9 release</h3>
<p>I hope all of you are enjoying Halloween! I - personally - have been very busy preparing a new bugfix release for the v2.4.x series ;)</p>
<p>Once again, it brings a lot of new bug fixes. The activity on the bug tracker has remained very high this week. Hopefully it will calm down next week :P</p>
<p>qBittorrent v2.4.8 to v2.4.9 changelog:</p>
<ul>
<li>BUGFIX: Fix crash when pressing enter in save path field in torrent addition dialog</li>
<li>BUGFIX: Fix crash when deleting a torrent with no metadata (closes #667528)</li>
<li>BUGFIX: Fix possible crash on clicking a RSS article (closes #575624)</li>
<li>BUGFIX: Correctly update total number of torrents when a torrent is automatically removed (closes #668726)</li>
<li>BUGFIX: Correctly display the hash of torrents with no metadata</li>
<li>BUGFIX: Elide status bar text if it is too wide</li>
<li>BUGFIX: Make sure the splash screen is displayed for 2 seconds</li>
<li>BUGFIX: Make listening on a particular interface more reliable</li>
<li>BUGFIX: Fix torrent size update in torrent addition dialog</li>
<li>BUGFIX: Fix possible crash on qBittorrent shutdown</li>
<li>BUGFIX: Fix and improve file priorities editing (closes #669084)</li>
<li>I18N: Updated Arabic, Italian and Croatian translations</li>
</ul>

<h3>October 24th 2010 - qBittorrent v2.4.8 release</h3>
<p>We have just uploaded another bugfix release for the qBittorrent v2.4.x series. It fixes quite a lot of issues. There are a lot of people taking to time to write bug reports and helping us make qBittorrent as bug-free as possible: this is great.</p>
<p>Development on qBittorrent v2.5.0 is also progressing fast and we have uploaded a second beta for people to test.</p>
<p>qBittorrent v2.4.7 to v2.4.8 changelog:</p>
<ul>
<li>BUGFIX: Fix possible crash on manual peer ban</li>
<li>BUGFIX: Improved hostname resolution code</li>
<li>BUGFIX: Several search plugins fixed</li>
<li>BUGFIX: Auto-disable the shutdown feature</li>
<li>BUGFIX: Remember the current property tab on startup</li>
<li>BUGFIX: Fix status list widget height issue on style change</li>
<li>BUGFIX: Fix rounding issue in torrent progress display</li>
<li>BUGFIX: Fix issue when altering files priorities of a seeding torrent</li>
<li>BUGFIX: Better fix for save path editing issues in torrent addition dialog</li>
<li>BUGFIX: Peers can now be sorted by country</li>
</ul>

<h3>October 19th 2010 - qBittorrent v2.4.7 release</h3>
<p>qBittorrent v2.4.7 was just uploaded to fix a few issues that were reported recently.</p>
<p>qBittorrent v2.4.6 to v2.4.7 changelog:</p>
<ul>
<li>BUGFIX: Display the priority column when the queueing system gets enabled</li>
<li>BUGFIX: Fix encoding problem in file renaming</li>
<li>BUGFIX: Delete unneeded files on torrent "soft" deletion</li>
<li>BUGFIX: Fix issues when marking a file as 'not downloaded' causes the torrent to complete</li>
<li>BUGFIX: Improved "Set Location" and "Change save path" dialogs</li>
<li>BUGFIX: Fix display of queued seeding torrents</li>
</ul>

<h3>October 17th 2010 - qBittorrent v2.4.6 release</h3>
<p>qBittorrent v2.4.6 was just uploaded in order to release a few new bug fixes. We have also uploaded qBittorrent v2.5.0beta1 which includes
the new embedded tracker and qBittorrent shutdown upon torrent completion.</p>
<p>qBittorrent v2.4.5 to v2.4.6 changelog:</p>
<ul>
<li>BUGFIX: Fix "torrent seeding after creation" feature</li>
<li>BUGFIX: The properties panel data would sometimes not match the selected torrent</li>
<li>BUGFIX: Fix detection of files at final destination when temp dir is used</li>
<li>BUGFIX: Fix moving of a torrent to an unexisting directory</li>
</ul>

<h3>September 26th 2010 - qBittorrent v2.4.2 release</h3>
<p>After a short pause in development, we have finally uploaded a bugfix release for qBittorrent v2.4. It brings quite a few fixes including some important ones for Windows platform.</p>
<p>qBittorrent v2.4.0 to v2.4.2 changelog:</p>
<ul>
<li>I18N: Updated Arabic translation</li>
<li>I18N: Fixes to German translation</li>
<li>BUGFIX: Save path can now be edited in torrent addition dialog</li>
<li>BUGFIX: Fix save path encoding on non-utf8 systems</li>
<li>BUGFIX: Fix saving to drive root on Windows</li>
<li>BUGFIX: OGV can now be previewed</li>
<li>BUGFIX: Maximum download limit is now 10MB/s</li>
<li>BUGFIX: Fix 'download in scan dir' persistence</li>
<li>BUGFIX: Add .torrent extension only when missing (torrent creator)</li>
<li>BUGFIX: Fix possible issue with temporary download path persistence</li>
<li>BUGFIX: Added support for | (OR) operator in RSS feed downloader</li>
<li>BUGFIX: Fix Web UI for spanish users</li>
<li>BUGFIX: Fix locale switching from Web UI</li>
<li>BUGFIX: Use AND operator for torrentdownloads.net searches</li>
<li>BUGFIX: Limit torrent addition dialog width to fit the screen</li>
<li>COSMETIC: Fix progress bars style on Windows</li>
</ul>

<h3>August 24th 2010 - qBittorrent v2.4.0 release</h3>
<p>I have just uploaded qBittorrent v2.4.0. It brings quite a few features and some of them were awaited by users for quite some time.</p>
<p>There may be a short pause in development now because I will defend my PhD thesis soon and then relocate to Finland.</p>
<p>qBittorrent v2.3.1 to v2.4.0 changelog:</p>
<ul>
<li>FEATURE: Added actions to "Move to top/bottom" of priority queue</li>
<li>FEATURE: Auto-Shutdown on downloads completion</li>
<li>FEATURE: Email notification on download completion</li>
<li>FEATURE: Added button to password-lock the UI</li>
<li>FEATURE: Added label-level Pause/Resume/Delete actions</li>
<li>FEATURE: Torrents can now be filtered by name</li>
<li>FEATURE: Run external program on torrent completion</li>
<li>FEATURE: Detect executable updates in order to advise the user to restart</li>
</ul>

<h3>July 27th 2010 - qBittorrent v2.3.0 release</h3>
<p>qBittorrent v2.3.0 was just released. It ships quite a few new features and we hope you will all like it.</p>
<p>Note that I will be leaving on vacation tomorrow and I will not be back until August 13th.</p>
<p>qBittorrent v2.2.11 to v2.3.0 changelog:</p>
<ul>
<li>FEATURE: Simplified torrent root folder renaming/truncating (&lt; v2.3.0 is no longer forward compatible)</li>
<li>FEATURE: Remember previous save paths in torrent addition dialog</li>
<li>FEATURE: Max number of half-open connections can now be edited</li>
<li>FEATURE: Added support for strict super seeding</li>
<li>FEATURE: The user can force listening on a particular network interface</li>
<li>FEATURE: Added cookie support for RSS feeds</li>
<li>FEATURE: User can force tracker reannounce</li>
<li>FEATURE: Added "No action" setting for double-click action</li>
<li>FEATURE: Several torrents can be moved at once</li>
<li>FEATURE: Added error state for torrents (error is displayed in a tooltip)</li>
<li>FEATURE: Added filter for paused/error torrents</li>
<li>FEATURE: Add Check/Uncheck all feature in Web UI</li>
<li>FEATURE: Search engine can now be disabled</li>
<li>FEATURE: Torrents can be automatically paused once they reach a given ratio</li>
<li>FEATURE: Several files can now be disabled at once</li>
<li>FEATURE: Added "Select All/None" buttons to files list</li>
<li>FEATURE: Added support for BitComet links (bc://bt/...)</li>
<li>BUGFIX: Hide seeding torrents files priorities in Web UI</li>
<li>BUGFIX: The user can disable permanently recursive torrent download</li>
<li>BUGFIX: Peer Exchange status is now correctly reported</li>
<li>BUGFIX: Use an INI file instead of the registry on Windows (More reliable)</li>
<li>BUGFIX: Removed client spoofing feature to avoid tracker blacklisting</li>
<li>COSMETIC: Display peers country name in tooltip</li>
<li>COSMETIC: Display number of torrents in transfers tab label</li>
<li>COSMETIC: Simplified program preferences</li>
<li>COSMETIC: Fix naming of actions opening new dialogs (use Name...)</li>
</ul>

<h3>June 23rd 2010 - qBittorrent v2.2.10 and v2.3.0beta3 release</h3>
<p>We have released another bugfix release for qBittorrent v2.2.x series. This will probably be the last one as development on v2.3.0 is going well. We would expect to release v2.3.0 final before the end of July.</p>
<p>qBittorrent v2.2.9 to v2.2.10 changelog:</p>
<ul>
<li>BUGFIX: Fix Web UI in qBittorrent nox version</li>
<li>BUGFIX: Improved ETA display (more user friendly)</li>
<li>BUGFIX: Fix possible compilation errors with libtorrent v0.15</li>
<li>BUGFIX: Fix minor issues in torrent creation tool</li>
<li>BUGFIX: Use checkable actions to avoid issues on systems hiding menu icons (e.g. recent Gnome)</li>
<li>BUGFIX: Use busy cursor for search plugin updates</li>
<li>BUGFIX: Free disk space calculation now works if destination folder does not exist</li>
<li>BUGFIX: Fix "append .!qB extension to incomplete files" feature</li>
<li>BUGFIX: Several OS/2 fixes by Silvan Scherrer</li>
<li>COSMETIC: Display "Alternative speed limits" button as pressed when enabled</li>
</ul>

<h3>June 13th 2010 - qBittorrent v2.2.9 release</h3>
<p>We have just uploaded qBittorrent v2.2.9 on Sourceforge. This new release includes bug fixes but also official support for Windows operating system.</p>
<p>The Windows build should be available today or tomorrow. However, the Mac build will be delayed because it is the exams period for our maintainers.</p>
<p>qBittorrent v2.2.8 to v2.2.9 changelog:</p>
<ul>
<li>FEATURE: Official support for Win32 platform</li>
<li>FEATURE: Better integration with Mac OS</li>
<li>BUGFIX: Fix torrent availability computation (closes #587337)</li>
<li>BUGFIX: Disable torrent addition dialog as a default</li>
<li>BUGFIX: Fix Web UI authentication with Opera Browser</li>
<li>BUGFIX: Fix Javascript error in Web UI when using IE</li>
<li>BUGFIX: Fix a lot of encoding problems on non UTF-8 systems</li>
<li>BUGFIX: Fix race condition allowing to run multiple instances (closes #286968)</li>
<li>BUGFIX: Fix window hiding problem when having a modal window (closes #589070)</li>
</ul>

<h3>June 6th 2010 - qBittorrent available for testing on Windows</h3>
<p>Today represents an important milestone for qBittorrent. We have uploaded today on Sourceforge our first <a href="http://sourceforge.net/projects/qbittorrent/files/qbittorrent-win32/qbittorrent-2.2.9/qbittorrent_2.2.9.1_setup.exe/download">Windows installer for qBittorrent v2.2.8+</a>. This installer should be regarded as a public beta as we are looking for feedback before making an official stable release (v2.2.9).</p>
<p>Please visit our download page to grab and install qBittorrent on Windows. If you find bugs, please report them via our <a href="http://bugs.qbittorrent.org">bug tracker</a>. We thank you in advance for your helpful feedback!</p>

<h3>June 4th 2010 - qBittorrent back on Mac OS X and making its debut on Windows</h3>
<p>qBittorrent had been unmaintained on Mac platform for a while because our package maintainer was temporarily unavailable. We have excellent news: he is back! Furthermore, we welcome an additional Mac maintainer in our team: Mirco Chinelli. Both worked really hard and uploaded today qBittorrent v2.2.8 dmg for Snow Leopard. Please find it on our download page.</p>
<p>Another great news is that I am currently working very actively on the Windows port with a new member: Mohammad Dib. As a consequence, qBittorrent v2.2.9 will be released and supported on all three major platforms: Linux, Mac and Windows. We are currently working hard on Windows bug fixing, in collaboration with beta testers (Please contact <a href="mailto:chris@qbittorrent.org">me</a> if you wish to help with the testing), in order to make a polished and stable release really soon! Stay put :)</p>

<h3>March 14th 2010 - qBittorrent v2.2.0</h3>
<p>qBittorrent v2.2.0 final has been released today. This new major release brings a few interesting features such as a bandwidth scheduler and more advanced feature settings. There was also a great deal of code cleanup and optimization.</p>
<p>qBittorrent v2.1.x to v2.2.0 changelog:</p>
<ul>
<li>FEATURE: User can set alternative speed limits for fast toggling</li>
<li>FEATURE: Bandwidth scheduler (automatically use alternative speed limits for a given period)</li>
<li>FEATURE: Added "Added/Completed On" columns to transfer list</li>
<li>FEATURE: Added "Upload/Download limit" columns to transfer list</li>
<li>FEATURE: Torrent files can be exported to a given directory</li>
<li>FEATURE: Outgoing ports range can be customized (for QoS)</li>
<li>FEATURE: User can choose to apply transfer limits on LAN too</li>
<li>FEATURE: User can choose to include the protocol overhead in transfer limits</li>
<li>FEATURE: Torrents can be automatically rechecked on completion</li>
<li>FEATURE: If 2 torrents have the same hash, add new trackers/URL seeds to the existing torrent</li>
<li>FEATURE: Trackers can be added from Web UI</li>
<li>FEATURE: Global transfer information are displayed in the new Web UI status bar</li>
<li>FEATURE: Allow to change the priority of several files at once</li>
<li>FEATURE: Support for multiple scan folders (Patch by Christian Kandeler)</li>
<li>BUGFIX: Only one log window can be opened at a time</li>
<li>BUGFIX: Optimized RSS module memory usage</li>
<li>BUGFIX: Consider HTTP downloads >1MB as invalid .torrent files and abort</li>
<li>BUGFIX: Fix Web UI authentication with some browsers</li>
<li>BUGFIX: Set Web UI ban period to 1 hour</li>
<li>COSMETIC: Improved style management</li>
</ul>

<h3>January 24th 2010 - qBittorrent v2.1.2 and v2.2.0beta1</h3>
<p>We have just uploaded v2.1.2. This bugfix release adds further polishing and should be very stable. Exceptionally, a feature was also added because it seems users were missing this one from earlier releases: File prioritizing in a torrent.</p>
<p>We have also tagged v2.2.0beta1 for testing purpose. It introduces alternative speed limits and a bandwidth scheduler. More changes to v2.2.0 will arrive soon as its development is just starting.</p>
<p>qBittorrent v2.1.1 to v2.1.2 changelog:</p>
<ul>
<li>FEATURE: Added back file prioritizing in a torrent</li>
<li>BUGFIX: Fix issue causing torrents not to be displayed in the list</li>
<li>BUGFIX: Make sure invalid torrent are removed from the transfer list</li>
<li>BUGFIX: Fix overwrite check when renaming a folder in a torrent</li>
<li>BUGFIX: Force a recheck after renaming files to avoid overwriting</li>
<li>BUGFIX: Improve "Open destination folder" behavior</li>
<li>BUGFIX: Fix race condition in RSS that could cause a crash on startup</li>
<li>BUGFIX: Improved user friendlyness of size units</li>
<li>BUGFIX: Optimized transfer list repainting</li>
<li>COSMETIC: Improved transfer speed display in peers list</li>
</ul>

<h3>January 20th 2010 - qBittorrent v2.1.1 bugfix release</h3>
<p>Several bugs were reported just after v2.1.0 release. We have thus decided to make a bugfix release. It is recommended to update due to the number of bugs fixed.</p>
<p>qBittorrent v2.1.0 to v2.1.1 changelog:</p>
<ul>
<li>BUGFIX: Fix compilation with Qt4.4</li>
<li>BUGFIX: Save torrent metadata so that it does not have to be re-downloaded on restart (Magnet links)</li>
<li>BUGFIX: Fix folder renaming in a torrent (would rename children under certain conditions)</li>
<li>BUGFIX: Nox version no longer requires libQtXml</li>
<li>BUGFIX: Configure file now checks for pkg-config executable which is required</li>
<li>BUGFIX: Torrents added from magnet links were not remembered on restart</li>
<li>BUGFIX: "Add in pause" setting can be ignored from torrent addition dialog</li>
<li>BUGFIX: Fix renaming of files with unicode characters in their name</li>
<li>BUGFIX: Fix typo in legal notice (startup)</li>
<li>BUGFIX: Can listen on ports &lt; 1024 (must be root)</li>
<li>BUGFIX: Paused torrents can now be rechecked</li>
<li>BUGFIX: Fix "open torrent destination" feature when path contains spaces</li>
<li>I18N: Updated translations (Hungarian, Chinese, Russian)</li>
</ul>

<h3>January 18th 2010 - qBittorrent v2.1.0 final release</h3>
<p>We uploaded today qBittorrent v2.1.0 final, a little earlier than anticipated. Once again, this new major release brings a lot of changes.</p>
<p>The most important new features are torrent categorizing/labeling to better organize big torrent lists, headless running for people who want to run qBittorrent on a server without X server and control it remotely, new search engine plugins, better proxy support, a more secure and complete Web UI.</p>
<p>A lot of polishing and bug fixing has been made since qBittorrent v2.0.0, it is strongly advised to update.</p>
<p>qBittorrent v2.0.7 to v2.1.0 changelog:</p>
<ul>
<li>FEATURE: Graphical User Interface can be disabled at compilation time (headless running)</li>
<li>FEATURE: Torrents can be labeled/categorized</li>
<li>FEATURE: Labeled torrent can be downloaded corresponding subfolders</li>
<li>FEATURE: Disk cache size can be set from preferences</li>
<li>FEATURE: Peer Exchange (PeX) can be disabled from preferences</li>
<li>FEATURE: Append !.qB extension to incomplete files option (libtorrent >= v0.15 only)</li>
<li>FEATURE: Torrent files/folders can be renamed (torrent addition dialog or files properties)</li>
<li>FEATURE: uTorrent compatible tracker list support (use torrentz.com url as a default)</li>
<li>FEATURE: Better proxy support and preferences remodeling</li>
<li>FEATURE: qBittorrent can identify itself as uTorrent, Vuze or KTorrent (Any stable version)</li>
<li>FEATURE: Torrents can be renamed in transfer list</li>
<li>FEATURE: Display torrent addition dialog for magnet links too</li>
<li>FEATURE: Files contained in a torrent are opened on double click (files panel)</li>
<li>FEATURE: Added support for magnet links in search engine</li>
<li>FEATURE: Added vertor.com and torrentdownloads.net search plugins</li>
<li>FEATURE: Search engine can now use a SOCKS5 proxy</li>
<li>FEATURE: HTTP proxy support for peer communication</li>
<li>BUGFIX: Search engine loads new proxy settings without program restart</li>
<li>BUGFIX: Use XDG folders (.cache, .local) instead of .qbittorrent</li>
<li>BUGFIX: Added legal notice on startup that the user must accept</li>
<li>BUGFIX: Protect Web UI authentication against brute forcing</li>
<li>BUGFIX: Use HTTP digest mode for Web UI authentication (instead of Basic)</li>
<li>BUGFIX: Properly display torrents with one file in subfolder(s)</li>
<li>COSMETIC: Use checkboxes to filter torrent content instead of comboboxes</li>
<li>COSMETIC: Use alternating row colors in transfer list (set in program preferences)</li>
<li>COSMETIC: Added a spin box to speed limiting dialog for manual input</li>
</ul>

<h3>January 3rd 2010 - qBittorrent v2.1.0rc1</h3>
<p>First of all, we would like to wish you all a happy new year. To enjoy this new year even more, I'm planning to release qBittorrent v2.1.0 really soon and We uploaded a first release candidate today. We are hoping that people will test this release candidate and report issues as soon as possible so that we can make a stable release before the end of this month.</p>
<p>v2.1.0 brings some long-waited features such as headless running (GUI can be disabled at compilation time by passing --disable-gui flag) and torrent categorizing/labeling. Renaming of torrents and their content is now also supported.</p>
<p>qBittorrent v2.0.5 to v2.1.0rc1 changelog:</p>
<ul>
<li>FEATURE: Graphical User Interface can be disabled at compilation time (headless running)</li>
<li>FEATURE: Torrents can be labeled/categorized</li>
<li>FEATURE: Labeled torrent can be downloaded corresponding subfolders</li>
<li>FEATURE: Disk cache size can be set from preferences</li>
<li>FEATURE: Peer Exchange (PeX) can be disabled from preferences</li>
<li>FEATURE: Append !.qB extension to incomplete files option (libtorrent >= v0.15 only)</li>
<li>FEATURE: Torrent files/folders can be renamed (torrent addition dialog or files properties)</li>
<li>FEATURE: uTorrent compatible tracker list support (use torrentz.com url as a default)</li>
<li>FEATURE: Better proxy support and preferences remodeling</li>
<li>FEATURE: qBittorrent can identify itself as uTorrent, Vuze or KTorrent (Any stable version)</li>
<li>FEATURE: Torrents can be renamed in transfer list</li>
<li>BUGFIX: Use XDG folders (.cache, .local) instead of .qbittorrent</li>
<li>COSMETIC: Use checkboxes to filter torrent content instead of comboboxes</li>
<li>COSMETIC: Use alternating row colors in transfer list (set in program preferences)</li>
<li>COSMETIC: Added a spin box to speed limiting dialog for manual input</li>
</ul>

<h3>December 13th 2009 - qBittorrent v2.0.1</h3>
<p>We have just uploaded a first bugfix release for qBittorrent v2.0. This version brings support for Hex Magnet Links which are used by some web sites such as <a href="http://thepiratebay.org/">The Pirate Bay</a>.</p>
<p>Another good news is that qBittorrent project won <a href="http://www.etoiles-du-libre.org">Les étoiles du libre</a> Free Software competition, in desktop applications.</p>
<p>qBittorrent v2.0.0 to v2.0.1 changelog:</p>
<ul>
<li>BUGFIX: µTorrent user-agent is now spoofed correctly</li>
<li>BUGFIX: Fix column hiding behavior when queueing system is disabled</li>
<li>BUGFIX: Fix link to plugins.qbittorrent.org in plugins dialog</li>
<li>BUGFIX: ~/qBT_dir is created only when it is actually used</li>
<li>BUGFIX: Fix possible missing slot message (toggleSelectedTorrentsSuperSeeding)</li>
<li>BUGFIX: Fix possible crash in torrent properties (files)</li>
<li>BUGFIX: Added Hex Magnet Links support (Thanks Haypo)</li>
</ul>

<h3>December 10th 2009 - qBittorrent v2.0.0 final release</h3>
<p>As planned, qBittorrent v2.0.0 final was released today after a rather long period of test, which was necessary due to the large number of features/changes introduced. We really received a lot of feedback regarding v2.0.0 betas and release candidates and we would like to thank the brave people who tested it.</p>
<p>qBittorrent v2.0.0 changelog is available <a href="http://qbittorrent.svn.sourceforge.net/viewvc/qbittorrent/trunk/Changelog?revision=3083&amp;view=markup">here</a>.</p>

<h3>December 2nd 2009 - qBittorrent v2.0.0rc4 and competition finalist</h3>
<p>Just a short article to announce that qBittorrent v2.0.0rc4 was released. It is stable and the UI will not change. I am now simply waiting for late translation updates so that I can make a final release (probably on December 10th)</p>
<p>Another good news is that qBittorrent project is now a finalist in "desktop applications" category in <a href="http://etoiles-du-libre.org">"Les Etoiles Du Libre"</a> Free Software competition. The winning projects will be selected on December 12th so let's keep our fingers crossed!</p>

<h3>November 28th 2009 - qBittorrent v2.0.0rc2 and more search engine plugins</h3>
<p>We have released today a second release candidate for qBittorrent v2.0.0. A lot of users decided to give v2.0.0 a try as soon as they saw the screenshots and we thank them for their useful feedback. Thanks to their effort, qBittorrent v2.0.0 final will be released sooner than expected.</p>
<p>We also recently moved our wiki to Sourceforge and we wrote a <a href="http://doc.qbittorrent.org">new documentation</a> for qBittorrent v2.0. The documentation is complete already.</p>
<p>Another recent news was that <a href="http://www.mininova.org">Mininova</a> engine disabled access to over a million torrent files when it partly shut down its website due to legal issues. After this news, TorrentFreak published a list of <a href="http://torrentfreak.com/10-alternatives-to-mininova-091126/">10 alternatives to Mininova</a>. We decided it would be useful to support these 10 search engines in qBittorrent. As a result, we are currently publishing new plugins on <a href="http://plugins.qbittorrent.org">Plugins.qbittorrent.org</a>. 4 new plugins are available at the time I'm writing this news while qBittorrent already supported 3 engines listed in the Top 10. This means that only 3 more plugins are missing to support the whole Top 10.</p>

<h3>November 17th 2009 - qBittorrent v1.5.6 release and qBittorrent v2.0.0 news</h3>
<p>Here is another bugfix release for qBittorrent v1.5.x while waiting for the next major release: qBittorrent v2.0.0. Development on v2.0.0 is going really well and we are hoping it will be ready in a month or so. qBittorrent v2.0 brings a lot of new features and UI changes. The list of changes is available <a href="http://qbittorrent.svn.sourceforge.net/viewvc/qbittorrent/trunk/Changelog?view=markup">here</a> but to summarize it should be a very close equivalent to the official Bittorrent client: µTorrent, in all levels: features, UI, lightness.</p>
<p>qBittorrent v1.5.5 to v1.5.6 changelog:</p>
<ul>
<li>BUGFIX: RSS feed articles can now be displayed using keyboard arrows</li>
<li>BUGFIX: RSS feed downloader can only process unread articles now</li>
<li>BUGFIX: Fixed memory leak in RSS parser</li>
<li>BUGFIX: Fixed possible crash in search autocompletion</li>
<li>BUGFIX: Improved ETA calculation for big torrents</li>
<li>BUGFIX: Fixed per-torrent speed limiting</li>
</ul>


              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="copyright">
        Help us improve the <a href="https://github.com/qbittorrent/qBittorrent-website" style="color: #FFFFFF;">website</a><br/>
        <br/>
        Copyright &copy;2006-2023 <a href="mailto:sledgehammer999@qbittorrent.org" style="color: #FFFFFF;">The qBittorrent project</a> - All rights reserved<br/>
        <br/>
      </p>
    </div>
  </body>
</html>