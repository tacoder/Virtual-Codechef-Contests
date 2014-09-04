<?php require("../../includes/header.php"); ?><h1>College Over!</h1><div class="content">

<p>The fourth years pass out and plan a get together to farewell each other for the last time.  After the party, however, it will be late, and the students would reach home pretty late and will be too tired to walk a long way home. In particular, every student refuses to come to the party if it is more than 2.5 km from his or her house.</p>
<p>The solution is to hold the party as close to as many of the students' houses as possible. Your job is to determine the optimal location for the party, so that as many students as possible will be willing to attend it.</p>
<p>We consider the city to be a flat square, 50 km on each side. A student can walk directly from the party in a straight line to his or her house (there are no obstacles).</p>
<p><br/></br/></p>
<h3>Input Specification</h3>
<p>Standard input consists of a number of lines, each containing two floating point numbers indicating the (x,y) coordinates of the house of one of the students. Each coordinate is between 0.0 and 50.0 (km). Each house is at a distinct location. There are at most 200 contestants.Your input ends with ( -1 -1 ).</p>
<h3>Output Specification</h3>
<p>Standard output consists of a single integer: the maximum number of students that can attend the party.</p>
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
4.0 4.0
4.0 5.0
5.0 6.0
1.0 20.0
1.0 21.0
1.0 22.0
1.0 25.0
1.0 26.0
-1 -1

<b>Output:</b>
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jasleenkb">jasleenkb</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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