<?php require("../../includes/header.php"); ?><h1>Stable Atoms</h1><div class="content">
<p> </p>
<p>You work at the prestigious atom-synthesis lab of DTU. You have been asked to make a new compound with N atoms and N+1 bonds, as according to a new theory these type of compounds are supposed to be more stable.</p>
<p>However you are interested in synthesizing only the most stable compound.You may assume that an atom can bond to any number of other atoms.Also an atom may bond to itself.</p>
<p>The stability of the compound is defined as the number of atoms in the shortest cycle in bond structure of the compound. Given N find the stability of the most stable compound that can be formed.</p>
<p>Since the answer can be large output the answer modulo 1000000007</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer denoting the number of test cases , T.<br />
Each of the following T lines will contain an integer N indicating the number of atoms.</p>
<h3>Output</h3>
<p>For every test case output the maximum stability that can be achieved modulo 1000000007.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^18</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1
2
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> If there is only one atom, the atom may form two bonds with itself. In that case the stability will be 1</p>
<p><b>Example case 2.</b> If there are two atoms, the atoms may form triple bonds between them. In that case the stability will be 2</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/apoorv_j">apoorv_j</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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