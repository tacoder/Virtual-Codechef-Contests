<?php require("../../includes/header.php"); ?><h1>New Manager</h1><div class="content">

<p>Master Chef wants to select a new manager for his resturant . All Chefs are seated in one room, Chefs are made to sit in m rows and n cols.Feedback-points of all Chef are given. All the Highest feedback-points Chefs of each row are selected.Next, all the lowest feedback-points Chefs of each column are selected. Now Master-Chef need to find weather there exist any Chef which is highest pointer in a row and lowest in column. If any Chef exists with this criteria, He is selected as new Manager .</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=20<br />
1&lt;=m,n&lt;=20<br />
0&lt;=feedback_point&lt;=10000000</p>
<h3>Input</h3>
<p>First line contains T, the number of test cases.<br />
For each test case ,<br />
First line contain , the row m and column n of Chefs.<br />
The following m rows have n numbers separated by space.These number represent feedback-points of Chefs.</p>
<h3>Output</h3>
<p>A single number, the point of the chef who is selected as new manager. if new manager can't be selected print -1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2
4 5
3 1
2 4
3 4
10 9 8 7
12 20 1 3
13 7 2 14


<b>Output:</b>
-1
10

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/deveshranjan">deveshranjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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