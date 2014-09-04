<?php require("../../includes/header.php"); ?><h1>Maximum Threat</h1><div class="content">

<p>`<b>Note:</b> Every where quotes are used just for clarity.<br />
Please always Ignore them except when mentioned explicitly.<br/></br/></p>
<p>
  There are <b>N</b> students and one teacher(name: <b>Bhoondu</b>) in a college.<br />
Each student is identified by his number <b>K</b> ( 1&lt;=<b>K</b>&lt;=<b>N</b>).<br/><br />
Some of them are friends of each others.<br />
Friendship relation is equivalence relation, means:</br/></p>
<ul>
<li><b>A</b> is friend of <b>A</b>.</li>
<li>If <b>A</b> is friend of <b>B</b> then <b>B</b> is friend of <b>A</b>.</li>
<li>If <b>A</b> is friend of <b>B</b> and <b>B</b> is friend of <b>C</b> then <b>A</b> is friend of <b>C</b>.</li>
</ul>
<p>Some other information about the students is that:</p>
<ol>
<li>If <b>A</b> is friend of <b>B</b> and <b>A</b> knows some thing(any information) then <b>A</b> will tell it to <b>B</b>.</li>
<li>If <b>A</b> is NOT friend of <b>B</b> and <b>A</b> knows some thing(any information) then <b>A</b> will NOT tell it to <b>B</b>.</li>
<li>If <b>A</b> knows some mistake of <b>B</b> and <b>A</b> is friend of <b>B</b>, <b>A</b> will NOT tell it to Bhoondu.</li>
<li>If <b>A</b> knows some mistake of <b>B</b> and <b>A</b> is NOT friend of <b>B</b> , <b>A</b> will tell(complain) it to Bhoondu.</li>
<p>One student <b>S</b> out of these students(1,2,... <b>N</b>) has done a mistake.<br />
And one another student <b>K</b> somehow came to know about <b>S</b>'s mistake. <b>S</b> DON'T know who is <b>K</b>.<br />
Now you have to help <b>S</b> to find out the maximum possible threat to him.<br />
<br/><br />
<b>Threat</b> is defined as how many students has complained about <b>S</b> to Bhoondu.</br/></p>
<p>
You are also given information about friendship of students in college.<br />
It will be given as pairs "<b>A</b> <b>B</b>" which means <b>A</b> is friend of <b>B</b>.<br />
Note that some information given to you may be redundant.<br />
</p>
<h3>Input</h3>
<p>
First line will contain the number of test cases <b>T</b>.<br />
For each test case the first line will contain <b>N</b> <b>S</b> and <b>F</b> separated by space.<br />
Where <b>N</b> is the number of students, <b>S</b> is the student who made the mistake and<br />
<b>F</b> is the number of friendship information given to you.<br />
After this next <b>F</b> lines will contain two numbers <b>A</b> and <b>B</b> separated by space.<br />
<br/>There is no empty line between different test cases.<br />
</br/></p>
<h3>Output</h3>
<p>
For each test case the output will be an integer in a new line, which will be the maximum threat for <b>S</b> in the corresponding test case.
</p>
<h3>Input Constrain:</h3>
<pre>
1 &lt;= T &lt;= 20
2 &lt;= N &lt;= 1000
0 &lt;= F &lt;= min(N*N,10000)
1 &lt;= S,A,B &lt;= N
A != B
</pre><h3>Example:</h3>
<pre>
<b>Input:</b>
3
5 1 3
1 2
3 4
3 5
6 2 3
1 2
4 5
5 6
6 1 3
1 2
1 3
5 6

<b>Output:</b>
3
3
2

</pre><p><b>Explanation:</b></p>
<p>
In 1st test case:<br/><br />
If 2 will know about 1's mistake then he will not tell it to Bhoondu because he is his friend so 0 threat.<br/><br />
If 3 will know about 1's mistake then he will tell it to 4,5. So three people will complain to Bhoondu, so threat = 3.<br />
<br/>Case for 4 and 5 is same as 3. So maximum threat = max(0,3,3,3) = 3.<br />
</br/></br/></br/></p>
</ol>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhics1">abhics1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
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