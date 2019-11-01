***********************************************************************************************************************************************************************
						Instructions to Execute API 
***********************************************************************************************************************************************************************
1. The Files are in the order specified.
2. Requires a locally created database named = "Housekeeping"
3. Database should have a user with name = "admin"
4. Password to admin should be ="12345678"
5. The database should contain four relations
6. The relation asset will have attributes ID int(), Name varchar(20) and Price real()
7. The relation task will have attributes ID int(), Name varchar(20) and Asset varchar(20)
8. The relation worker will have attributes ID int(), Name varchar(20) and Skill varchar(20)
9. The relation allocation will have attributes asset int(), task int(), worker int() , alloct timestamp and expiret timestamp
10. The dependencies have already been called, the relations can be populated with sample data for testing purposes
11. To view all available assets , the read(*) method has been implemented in .../assets/all.php
12. All the files has JSON Output format
13. POSTMAN application can be used to test and debug the same (Included in .../JSON%20Viewer%20-%20Dependency)

***********************************************************************************************************************************************************************
Created and Copyrighted by Arpan Sarkar (registered email)
md5: 1e6fdd840cc50f94afbe2fc1eb809fa1
sha1: b2f36e5a23a840505a77d0c10d26ceb8e7af4425
/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\(*#*)\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\