<?php
define('UC_CONNECT', 'mysql');
define('UC_DBHOST', '127.0.0.1');
define('UC_DBUSER', 'root');
define('UC_DBPW', 'root');
define('UC_DBNAME', 'ultrax');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', 'ultrax.pre_ucenter_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '123456');
define('UC_API', 'http://www.discuz.com/upload/uc_server');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '127.0.0.1');
define('UC_APPID', '2');
define('UC_PPP', '20');
/*
define('UC_CONNECT', 'mysql');
define('UC_DBHOST', 'localhost');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'ucenter');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`ucenter`.uc_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '123456');
define('UC_API', 'http://www.discuz.com/upload/uc_server');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '1');
define('UC_PPP', '20');
*/

/*
define('UC_CONNECT', 'mysql');				// ���� UCenter �ķ�ʽ: mysql/NULL, Ĭ��Ϊ��ʱΪ fscoketopen()
							// mysql ��ֱ�����ӵ����ݿ�, Ϊ��Ч��, ������� mysql

//���ݿ���� (mysql ����ʱ, ����û������ UC_DBLINK ʱ, ��Ҫ�������±���)
define('UC_DBHOST', '192.168.1.151');			// UCenter ���ݿ�����
define('UC_DBUSER', 'root');				// UCenter ���ݿ��û���
define('UC_DBPW', 'root');					// UCenter ���ݿ�����
define('UC_DBNAME', 'discuz');				// UCenter ���ݿ�����
define('UC_DBCHARSET', 'utf-8');				// UCenter ���ݿ��ַ���
define('UC_DBTABLEPRE', 'discuz.pre_ucenter_');			// UCenter ���ݿ��ǰ׺

//ͨ�����
define('UC_KEY', '123456');				// �� UCenter ��ͨ����Կ, Ҫ�� UCenter ����һ��
define('UC_API', 'http://www.discuz.com/upload/uc_server');	// UCenter �� URL ��ַ, �ڵ���ͷ��ʱ�����˳���
define('UC_CHARSET', 'utf-8');				// UCenter ���ַ���
define('UC_IP', '');					// UCenter �� IP, �� UC_CONNECT Ϊ�� mysql ��ʽʱ, ���ҵ�ǰӦ�÷�������������������ʱ, �����ô�ֵ
define('UC_APPID', 3);					// ��ǰӦ�õ� ID
/*
//ucexample_2.php �õ���Ӧ�ó������ݿ����Ӳ���
$dbhost = 'localhost';			// ���ݿ������
$dbuser = 'root';			// ���ݿ��û���
$dbpw = '';				// ���ݿ�����
$dbname = 'ucenter';			// ���ݿ���
$pconnect = 0;				// ���ݿ�־����� 0=�ر�, 1=��
$tablepre = 'example_';   		// ����ǰ׺, ͬһ���ݿⰲװ�����̳���޸Ĵ˴�
$dbcharset = 'gbk';			// MySQL �ַ���, ��ѡ 'gbk', 'big5', 'utf8', 'latin1', ����Ϊ������̳�ַ����趨
*/
//ͬ����¼ Cookie ����
$cookiedomain = ''; 			// cookie ������
$cookiepath = '/';			// cookie ����·��