<?php require("../../includes/header.php"); ?><h1>Erase The Powers</h1><div class="content">

<pre>
<p><b>Problem description :</b>
Raghu gives Rannvijay a task.There are infinite number of members in Rannvijay,s Team.
He also has a blackboard.He write <b>N</b> natural numbers on a blackboard.
His first team member come and erase all the numbers which are squares of a natural
number.Then, 2nd one comes and erase all the cubes.The 3rd one erase all the fourth 
power of numbers and so on.
Both of them are watching this.
Rannvijay wants Raghu to tell him the number of his teammates that will get a chance
to erase a number.But Raghu wants you to help him.So, go ahead.  
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b>&lt;=T&lt;= <b>10</b>.</li>
<li> <b>1</b>&lt;=<b>L</b>&lt;=<b>1026</b>.</li>
 </ul>
<p> </p>

<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line contains a single positive integer <b>T</b> , the number of test cases. <b>T</b> 
Each test cases consists of following: </li>
<li>First line contains <b>L</b> i.e. the length of number N i.e. the number of digits in it.</li>
<li>As <b>N</b>can be as large as 10^1024 we will enter it in array digit by digit</li>
</ul>
Example:
If L=5 and N=63430, we will enter it like this:
6 3 4 3 0.

<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single line containing the answer for the corresponding test case....".</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
1
9
10
2 3 0 3 2 5 1 7 9 2
<b>Output:</b>
1
2
11

Explanation
In the first test case :1 and 2 are written on board.As 1 is perfect square so ans is 1.
</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/teamcoadies10">teamcoadies10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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