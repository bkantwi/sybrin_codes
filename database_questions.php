<!-- Question 9 d.  -->
<!-- Write a SQL statement that will output the following result: -->
SELECT * FROM Employee ORDER BY Name ASC;

<!-- Question 9 e -->
SELECT b.Name,b.Surname,b.Position, 
m.Name as ManagerName, 
m.Position as ManagerPosition 
FROM Employee 
AS b INNER JOIN EmployeeManagers AS l 
ON b.id = l.EmpID 
LEFT JOIN Employee as m on 
m.id = l.MID;


<!-- Question 9 f -->
SELECT b.Name,b.Surname,b.Position,m.Name as ManagerName, m.Position as ManagerPosition 
FROM Employee 
AS b LEFT JOIN EmployeeManagers AS l 
ON b.id = l.EmpID 
LEFT JOIN Employee as m on 
m.id = l.MID;


<!-- Question 9 g -->
<!-- Assuming the table in question 9 e is called emp_managers -->
SELECT ManagerName, COUNT(*) AS StaffCount FROM emp_managers GROUP BY Name;
