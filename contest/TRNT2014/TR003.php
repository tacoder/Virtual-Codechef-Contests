<?php require("../../includes/header.php"); ?><h1>Modak Automation</h1><div class="content">
<h3>
Problem Statement<br />
</h3>
<p>
You all know that how much Chef Diablo likes <i>Modaks</i>. So with the aim of increasing the production of <i>Modaks</i> he is automating his <i>Modak</i> production unit. For this purpose he has ordered several machines (M). There are several workstations(N). Each machine is connected between 2 workstations. Each machine makes some part of the <i>Modak</i> and passes it to its destination workstation. Now there can be various ways of making <i>Modaks</i> and they can also be of various flavors, so there may be more than one links from the starting workstation (0) to the ending workstation (N-1), i.e. the production starts at a workstation and it follows different paths to converge at a single workstation. Each machine has a corresponding throughput associated with it. Chef Diablo wants to know the total throughput of the system. But the number of machines can be very large and he is a very busy person hence he appoints his junior, Chef Suri, to do the honours. Now Chef Suri tries to calculate it manually but then he keeps on committing mistakes and gets frustrated. He turns to you all for help. Given the number of workstations (N), the number of machines (M) and their corresponding throughputs (thpt) per day, help Chef Suri calculate the  throughput of the whole system per day.
</p>
<h3>
Input:<br />
</h3>
<p>
The first line consists of 2 space seperated numbers N and M. Then M lines follow consisting of 3 space seperated numbers, x y thpt, x and y indicate a machine between nodes x and y and thpt indicates the throughput of that machine. It is guaranteed that there is only 1 machine between any 2 workstations.
</p>
<h3>
Output:<br />
</h3>
<p>
Output a single line indicating the total throughput.
</p>
<h3>
Constraints:<br />
</h3>
<p>
1&lt;=N&lt;=10^3
</p>
<p>
1&lt;=M&lt;=10^4
</p>
<p>
1&lt;=thpt&lt;=10^3
</p>
<h3>
Sample Input:<br />
</h3>
<p>
4 4<br /><br />
0 1 4<br /><br />
0 2 9<br /><br />
1 2 2<br /><br />
2 3 3
</p>
<h3>
Sample Output:<br />
</h3>
<p>
3
</p>
<h3>
WARNING: LARGE INPUT FILES....PLS USE FASTER I/O METHODS!!!!<br />
</h3>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aadesh_99">aadesh_99</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>