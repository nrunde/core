 * Manage files via FTP ("Safe Mode Hack")
 * 
 * @package   Library
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2011-2012
class Files_Ftp extends \Files
	 * Connection indicator
	 * Files
	 * Disconnect from FTP server
	 * 
	 * @throws \Exception If an FTP connection cannot be established
			throw new \Exception('The FTP host must not be empty');
			throw new \Exception('The FTP username must not be empty');
			throw new \Exception('The FTP password must not be empty');
			throw new \Exception('Could not connect to the FTP server');
			throw new \Exception('Authentication failed');
	 * 
	 * @param string $strDirectory The directory name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strDirectory The directory name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * @param string $strMode The operation mode
	 * 
	 * @return resource|boolean The file handle or false if there was an error
	 * 
	 * @param resource $resFile    The file handle
	 * @param string   $strContent The content to store in the file
	 * 
	 * @return boolean True if the operation was successful
	 * Close a file handle
	 * 
	 * @param resource $resFile The file handle
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strOldName The old name
	 * @param string $strNewName The new name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strSource      The source file or folder
	 * @param string $strDestination The new file or folder path
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * @param mixed  $varMode The new file mode
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * 
	 * @return boolean True if the file is writeable
	 * Move an uploaded file to a folder
	 * 
	 * @param string $strSource      The source file
	 * @param string $strDestination The new file path
	 * 
	 * @return boolean True if the operation was successful