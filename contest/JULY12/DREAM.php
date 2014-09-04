<?php require("../../includes/header.php"); ?><h1>Chef&#39;s Dream</h1><div class="content">

<p align="justify">   The Chef is sleeping now. He tries to cook new kind of meals in his dream.<br /> <br /><br />
These meals are arranged in a row and numbered from 1 to <b>N</b> consecutively. For each meal <i>i</i> (1&lt;=<i>i</i>&lt;=<b>N</b>) there </p>
<p>is given one integer <i>f(i)</i> which denotes the time needed to cook it. Initially, all meals are uncooked. Each assistant </p>
<p>of The Chef (there are infinite number of them) can help him with cooking.<br /> <br /><br />
The abilities of all assistants are same. There can be at most one assistant cooking at each moment. He must choose some </p>
<p>continuous subsequence of meals with length <b>K</b>(any such subsequence can be chosen). And if there are uncooked meals in </p>
<p>it, he will cook all uncooked meals which has the minimum cooking time among uncooked meals in the chosen subsequence. </p>
<p>Nothing done to another meals.<br />
<br /> <br /></p>
<p>   The dream was so interesting that he tried to solve such a problem: What is the minimum number of assistants which can </p>
<p>cook all the meals assuming that each of them will cook at most once?<br />
   But since the bell rings and Chef's friends has come to visit him, he will wake up after 2 seconds. Your program </p>
<p>should calculate the answer before The Chef will come to himself.</p>
<h3>Input</h3>
<p>First line of input file contains two integers <b>N</b> (1&lt;=<b>N</b>&lt;=10<sup>5</sup>) and <b>K</b> (1&lt;=<b>K</b>&lt;=<b>N</b>), </p>
<p>followed by a line containing <b>N</b> integers. The <i>i<sup>th</sup></i> integer denotes <i>f(i)</i>-the cooking time of </p>
<p>meal number <i>i</i> (1&lt;=<i>f(i)</i>&lt;=10<sup>9</sup>)</p>
<h3>Output</h3>
<p>Print minimum number of assistans which can cook all the meals in one line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 3
40 30 40 30 40

<b>Output:</b>
3
</pre><p>
<br /><br />
<b>Explanation:</b><br />
<br />3 assistants are enough to cook all the meals. They can work in following schedule:<br />
<br />1<sup>st</sup> assistant chooses interval [2,4] and cooks meals 2 and 4.<br />
<br />2<sup>nd</sup> assistant chooses interval [1,3] and cooks meals 1 and 3.<br />
<br />3<sup>rd</sup> assistant chooses interval [3,5] and cooks meal 5.<br />
<br />Other schedules can also be possible.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kamranmaharov ">kamranmaharov </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2012</td>
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