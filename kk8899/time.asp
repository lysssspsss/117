<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<%
opid=int(Request.Form("myck"))
if opid="" or opid=0 then
opid=1
else
opid=opid
end if
%>

<%
if opid=14 then'五分
if do_num>10 then '00:00
doo_date=op_date(do_date_new)
else
doo_date=do_date
end if
end if
if opid=1 or opid=2 or opid=4 or opid=5 or opid=7 or opid=8 or opid=9 or opid=10 or opid=11 then
doo_date=do_date
end if
ee_time=doo_date&" "&do_btime(do_num)
vv_time=Dateadd("s", int(utime),ee_time)
end_time=DateDiff("s", now(),vv_time )
if end_time>0 then
end_time=end_time&"000"
end_time=cint(end_time)
else
end_time=0
end if
response.Write end_time
%>