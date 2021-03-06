<?php require("../../includes/header.php"); ?><h1>Nuclear Reactors</h1><div class="content">

<p>
There are K nuclear reactor chambers labelled from 0 to K-1. Particles are bombarded onto chamber 0. The particles keep collecting in the chamber 0. However if at any time, there are more than N particles in a chamber, a reaction will cause 1 particle to move to the immediate next chamber(if current chamber is 0, then to chamber number 1), and all the particles in the current    chamber will be be destroyed and same continues till no chamber has number of particles greater than N. Given K,N and the total number of particles bombarded (A), find the final distribution of particles in the K chambers. Particles are bombarded one at a time. After one particle is bombarded, the set of reactions, as described, take place. After all reactions are over, the next particle is bombarded. If a particle is going out from the last chamber, it has nowhere to go and is lost.</p>
<h3>Input</h3>
<p>
The input will consist of one line containing three numbers A,N and K separated by spaces.<br />
A will be between 0 and 1000000000 inclusive.<br />
N will be between 0 and 100 inclusive.<br />
K will be between 1 and 100 inclusive.<br />
All chambers start off with zero particles initially.</p>
<h3>Output</h3>
<p>
Consists of K numbers on one line followed by a newline. The first number is the number of particles in chamber 0, the second number is the number of particles in chamber 1 and so on.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 1 3
<b>Output:</b>
1 1 0
</pre><p>
<b>Explanation</b><br />
Total of 3 particles are bombarded. After particle 1 is bombarded, the chambers have particle distribution as<br />
 "1 0 0". After second particle is bombarded, number of particles in chamber 0 becomes 2 which is greater<br />
 than 1. So, num of particles in chamber 0 becomes 0 and in chamber 1 becomes 1. So now distribution is<br />
 "0 1 0". After the 3rd particle is bombarded, chamber 0 gets 1 particle and so distribution is "1 1 0" after all<br />
particles are bombarded one by one.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-07-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50001 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>