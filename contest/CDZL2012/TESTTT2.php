<?php require("../../includes/header.php"); ?><h1>moksha-2012</h1><div class="content">

<p>You are responsible for conducting a fest in your college. Each student has told his choice for pop night, which he/ she wants  and one he/she doesn’t want; of course they all understand that since there is only going to be one singer, no one is likely to have all their requirements satisfied. Can you call a singer that will satisfy at least one request from all your friends?<br />
 <br />
Input Code	Teacher <br />
A. 	Honey Singh<br />
B. 	Atif Aslam<br />
C. 	Mika<br />
D. 	Annu Malik<br />
E. 	Shreya Ghoshal<br />
F. 	Mohit chauhan<br />
G. 	Daler mehndi<br />
H. 	Moulvi<br />
I. 	Saleem<br />
J. 	Sonu Nigam<br />
K. 	Abheejet Sawant<br />
L. 	Sudesh Bhosle<br />
M.	Bryan Adams<br />
N. 	Khelash Kher<br />
O. 	Alisha<br />
P. 	Shakira</p>
<p>Your friends provide you with a line of text that describes their preferences. For example, the line<br />
+O-H+P;<br />
reveals that someone will accept xyz, Iyer but not abc<br />
-E-I-D+A+J;<br />
indicates that someone else will not accept Shreya, Saleem and Annu, but Honey Singh or Sonu Nigam would be accepted</p>
<h3>Input</h3>

<p>The input consists of a series of constraints.<br />
A constraint is a list of 1 to 12 students choice lists.Each on a line by itself followed by a period on a line by itself.<br />
A constraint list is a series of singers requests terminated by a single semicolon.<br />
A request is a sign character (+/-) and then an uppercase letter from A to P. </p>
<h3>Output</h3>

<p>For each constraint, provide a description of a singers that satisfies it. A description is the string "Singers: " in columns 1 through 10 and then a series of letters, in alphabetical order, listing the codes for singers possible. So, for listing possible singers as Shreya, Saleem and Annu, you  need to print:<br />
Singers: EID<br />
If no combination of singers can be found which satisfies at least one request of every person, your program should print the string<br />
"Sorry" on a line by itself starting in column 1. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
+A+B+C+D-E-F-G-H; 
-A-B+C+D-E-F+G+H; 
-A+B-C+D-E+F-G+H; 
. 
+A+B+C+D; 
+E+F+F+H; 
+A+B-G; 
+O+J-F; 
+H+I+C; 
+P; 
+O+M+L; 
+M-L+P; 
. 
+A+B+C+D; 
+E+F+F+H; 
+A+B-G; 
+P-O; 
+O+J-F; 
+H+I+C; 
+P; 
+O; 
+O+M+L; 
-O-P; 
+M-L+P; 
.


<b>Output:</b>
Singers: 
Singers: CELP
Sorry 
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jasleenkb">jasleenkb</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-02-2012</td>
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