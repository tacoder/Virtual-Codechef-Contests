<?php require("../../includes/header.php"); ?><h1>Jumpimg Gopal</h1><div class="content">
<h3>Problem statement</h3>
<p>Gopal is standing at the bottom of a longest stair in UVCE. And surprisingly steps are numbered sequentially form 1 to infinity. The bottommost step has number 1, the next step has number 2, and so on.<br />
Gopal is now standing at bottom of the stairs, will now perform exactly <strong>N</strong> consecutive actions. When performing <strong><i>i</i><sup>th</sup></strong> action , Gopal chooses between two options: either he does nothing, or he jumps exactly <strong><i>i</i></strong> steps up the stairs.</p>
<p>The steps are very old and Gopal know that the <strong>B</strong><sup>th</sup> step is broken, he cannot jump onto this step. You are given <strong>N</strong>, number of actions performed by Gopal and <strong>B</strong>, number or index of broken step. Your task is to find the number or index of the topmost step that can be reached by Gopal.</p>
<h3>INPUT</h3>
<p>
First line contains <strong>T</strong>, number of test cases.<br />
Each test case contains two space separated integers <strong>N</strong> and <strong>B</strong>.
</p>
<h3>OUTPUT</h3>
<p>
For each test case output the maximum number or index of step, that can be reached by Gopal in <strong>N</strong> actions.
</p>
<h3>CONSTRAINTS</h3>
<ul>
<li>1 ≤ T ≤ 1000</li>
<li>0 ≤ N ≤ 2000</li>
<li>0 ≤ B ≤ 400000</li>
</ul>
<h3>EXAMPLE</h3>
<p><b>Input</b></p>
<p>
4<br />
2 2<br />
2 1<br />
3 3<br />
1313 5858
</p>
<p><b>Output</b></p>
<p>
3<br />
2<br />
5<br />
862641
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2013</td>
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