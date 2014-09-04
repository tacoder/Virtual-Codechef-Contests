<?php require("../../includes/header.php"); ?><h1>King and Magician</h1><div class="content">
<p> </p>
<p>There is a magician who can transform Iron objects to Gold replicas and vice versa. The King decides to experiment the claims of the magician by putting forward an sequence of such objects. A Gold object is represented by a + and an iron object is represented by a - </p>
<p>The condition of play put forward by the king is as follows: </p>
<p>1. If the first object of the sequence is Gold then the last object must change its type (gold should change to iron and vice versa) <br />
2. The leftmost object in the sequence is removed, and is added into the sequence from the right side after undergoing transformation(gold should change to iron and vice versa). </p>
<p>After applying these two protocols on the sequence, the King counts up by 1. The King wants to know, the state of his objects after a given number of counts. At count 0, sequence is in its original state</p>
<p> </p>
<h3>Input</h3>
<p>First line will consist of an integer h which denotes the no. of experiments conducted by King.<br />
Next line consists of m and n where m represents the length of the sequence and  n represents the no. of queries asked by the king.<br />
Next line consists a string of length m composed of '+' and '-' where '+' represents the gold and '-' represents the iron. This sequence will be the initial state (count 0).<br />
Then, there will be n lines with an integer n(i), representing the count no. at which king wants to know the state of the sequence.</p>
<p> </p>
<h3>Output</h3>
<p>For each experiment one line containing "Experiment #j" , being j the j<sup>th</sup> experiment magician is conducting.<br />
Then, n strings in each new line, representing the sequence at that time.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ h ≤ 15<br />
1 ≤ m ≤ 14<br />
1 ≤ n ≤1000<br />
0 ≤ n(i) ≤ 10<sup>9</sup></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 6
+--+
0
2
3
5
7
10
<b>Output:</b>
Experiment #1:
+--+
---+
--++
++++
+-+-
+---
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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