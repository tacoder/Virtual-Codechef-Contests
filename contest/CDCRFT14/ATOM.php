<?php require("../../includes/header.php"); ?><h1>Atoms in the Lab</h1><div class="content">
<p>
  Mr. Yagami is a scientist in the Bhabha Atomic Research Centre. They are<br />
  conducting a lab experiment on nuclear fission. In nuclear fission, one atom<br />
  breaks into more than one atom of the same type.</p>
<p>
  Initially, there are <b>N</b> atoms in the lab. Starting from now <b>(t=0)</b>, after each<br />
  second, every atom will break into <b>K</b> atoms of the same type. They don’t want<br />
  the number of atoms to exceed <b>M</b>, so they have to stop the reaction at some<br />
  time <b>t=T</b>. Can you find this value <b>T</b> for Mr. Yagami.
  </p>
<h3>Input Format:</h3>
<p>
  First line contains <b>P</b>, the number of test cases. Next <b>P</b> lines contain three<br />
  integers each. These three integers represent the values of <b>N</b>,<b> K</b> and <b>M</b><br />
  respectively.
  </p>
<h3>Output Format:</h3>
<p>
  For each test case print the time at which the reaction will have to be<br />
  stopped.
  </p>
<h3>Constraints:</h3>
<p>
<b><br />
  1 ≤ P &le; 10^4<br />
  2 ≤ N, K, M ≤ 10^18<br />
</b>
  </p>
<h3>Sample Input:</h3>
<pre>
2
2 2 7
2 2 8</pre><h3>Sample Output:</h3>
<pre>
1
2</pre><h3>Explanation:</h3>
<p>
  1st test case: <br />
  at t=1, number of atoms=4<br />
  at t=2, number of atoms will be 8.<br />
  So reaction has to be stopped at t=1.</p>
<p>  2nd test case:<br />
  at t=1, number of atoms=4<br />
  at t=2, number of atoms will be 8.<br />
  at t=3, number of atoms will be 16.
  </p>
<p><br />
<b>Problem Setter: Lalit Kundu</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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