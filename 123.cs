select DeptName as 部門名稱,
(select sum(amounts) from Overtime as s where s.DeptName=p.DeptName and year(sheetdate)=2022) as加班費合計,
(select sum(Hours) from Overtime as s where s.DeptName=p.DeptName and year(sheetdate)=2022) as加班費時數合計,
cast((
cast((select sum(amounts) from Overtime as s where s.DeptName=p.DeptName and year(sheetdate)=2022) as decimal)
/
cast((select sum(Hours) from Overtime as s where s.DeptName=p.DeptName and year(sheetdate)=2022)as decimal)
)as int)
 as平均每小時加班費????

from Overtime as p
group by DeptName
order by DeptName
