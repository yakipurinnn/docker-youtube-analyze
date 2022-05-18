TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger if not exists 202205_views_insert_trigger  \n                                after insert on video_stats for each row \n                                insert into 202205_views (video_id, ch_name, title) values(new.video_id, new.ch_name, new.title)' 'CREATE DEFINER=`root`@`localhost` trigger if not exists 202205_views_delete_trigger  \n                                after delete on video_stats for each row \n                                delete from 202205_views where video_id = old.video_id'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci' 'latin1_swedish_ci'
created=165288729427 165288729428
