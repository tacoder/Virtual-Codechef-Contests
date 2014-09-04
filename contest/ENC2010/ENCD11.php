<?php require("../../includes/header.php"); ?><h1>Hostel LAN Connection</h1><div class="content">

<p>The Hostel LAN connection is to be laid down. Rooms in the Hostel lie all in a straight line. It is always desired to use minimum number of cable wires for this work and all the rooms receive the LAN service. A room can either get connected to main line or it can get connected to a room to its immediate let or right provided the latter room is already getting the LAN service.<br />
You are to write a program that determines the number of different combinations of the cable wires that is possible so that every room receives the service.</p>
<p>example for 3 rooms:</p>
<pre>
 
 	M           M               M
            / \         /                      \
          1  2      1-2                1-2
</pre><p>M represent the Main center and 1 and 2 represents the rooms.<br />
In first, Main is connected to both.<br />
In second, Main is connected to 1 and 1 is connected to 2.<br />
In third, Main is connected to 2 and 2 is connected to 1.     </p>
<h3>Input</h3>
<p>Each line of input contains a positive integer N (N&lt;=40), the number of rooms.There is only one main supply. A value of 0 for N indicates the end of input which should not be processed.Terminate the input with a zero.</p>
<h3>Output</h3>
<p>For each line of input you have to output, on a single line, the number of possible arrangements. Output will be less than 2^64 - 1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2
3
0


<b>Output:</b>
1
3
8
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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