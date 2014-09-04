<?php require("../../includes/header.php"); ?><h1>Minimum Moves</h1><div class="content">

<h3>Background</h3>
<p>Bob is a student of NIT Jalandhar.Like all other students he likes to solve puzzles.In one such popular puzzle there is board in which there are m*m boxes  each assigned an a non zero integer  except one box which is marked as 0 and is treated as vacant .Only the  vertical and horizontal neighbors  of vacant box can move  towards it leaving their place as vacant.To solve this puzzle bob has to arrange the boxes in increasing order of their value with the vacant box(box marked as zero ) coming at the end(lower right corner of board).But like all other engineers bob is very lazy and wants to solve it in minimum number of steps.</p>
<h3>Input:</h3>
<p>The first line of input consists of an interger  t representing number of test case.<br/><br />
Second line of input will be an integer m representing the size of board (m*m) .<br />
Third line of input consists of m*m space separated integers in which only one is 0 (vacant box).<br />
</br/></p>
<h3>Output:</h3>
<p>Each test case has single output  printing the minimum number of moves of solve the puzzle.</p>
<p><br/></br/></p>
<h3>Constraints</h3>
<pre>
4 &lt;= t &lt;= 20
1 &lt;= m &lt;= 100
</pre><h3>Sample Input</h3>
<p>
4<br/><br />
2<br/><br />
4 0 3 1<br/><br />
3<br/><br />
9 8 5 2 0 4 10 12 17<br/><br />
5<br/><br />
9 58 38 0 37 2 1 67 23 12 40 7 23 79 29 123 72 99 6895 35 60 547 768 34 999		<br/><br />
6<br/><br />
12 45 78 3 90 1 -5 7 234 10 -4 -9 0 3456 71 29 91 1991 2012 1854 785963 786 7798 652034  9635 2357 68520 143 1010109 -9 -789 568 -95231 34786 16795 5468 <br/><br />
</br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>
Output</h3>
<p>
5<br/><br />
12<br/><br />
66<br/><br />
116<br/><br />
</br/></br/></br/></br/></p>
<h3>Explaination</h3>
<p><pre>Initial state 		final state		
4	0(vacant)	                1	3
3	1		                4	0(vacant)	
</pre></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/opengeest">opengeest</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>