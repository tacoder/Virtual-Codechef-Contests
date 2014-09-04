<?php require("../../includes/header.php"); ?><h1>Bot</h1><div class="content">

<p>You have been selected to write the navigation module for Bot. Unfortunately, the mechanical engineers<br />
have not provided a lot of flexibility in movement; indeed, the PropBot can only make two distinct movements.<br />
It can either move 10 cm forward, or turn towards the right by 45 degrees. Each of these individual movements<br />
takes one second of time.</p>
<h3>Input</h3>
<p>
Your module has two inputs: the Cartesian coordinates of a point on the plane that the PropBot wants to get as<br />
close to as possible, and the maximum number of seconds that can be used to do this. At the beginning of the<br />
navigation, the robot is located at the origin, pointed in the +x direction.<br />
The number of seconds will be an integer between 0 and 24, inclusive. Both the x and y coordinates of the<br />
desired destination point will be a real number between -100 and 100, inclusive.<br />
The first entry in the input file will be the number of test cases, t (0 &lt; t &lt; 100). Following this line will<br />
be t lines, with each line containing three entries separated by spaces. The first entry will be the number of<br />
seconds PropBot has to get close to the point. The second entry is the x-coordinate of the point, and the third<br />
entry is the y-coordinate of the point.</p>
<h3>Output</h3>
<p>Your program must return the distance between the goal point and the closest point the robot can get to within<br />
the given time.<br />
Your result should include at least one digit to the left of the decimal point, and exactly six digits to the right of<br />
the decimal point. To eliminate the chance of round off error affecting the results, we have constructed the test<br />
data so the seventh digit to the right of the decimal point of the true result is never a 4 or a 5.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
24 5.0 5.0
9 7.0 17.0


<b>Output:</b>
0.502525
0.100505
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cseaiitg">cseaiitg</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>