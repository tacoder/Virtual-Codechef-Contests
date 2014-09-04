<?php require("../../includes/header.php"); ?><h1>Sereja and Arrays</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/SEARRAYS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/SEARRAYS.pdf">Russian</a>.</h3>
<h3>Sereja and Arrays</h3>
<div class="legend">
<p>Sereja have an array that consist of <span class="tex-span"><i>n</i></span> integers <span class="tex-span"><i>a</i><sub class="lower-index">1</sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index">2</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>n</i></sub></span> <span class="tex-span">(0 ≤ <i>a</i><sub class="lower-index"><i>i</i></sub> ≤ 1)</span>. Sereja can make next operation:<br />
<ul type="disc">
<li> fix some integer <span class="tex-span"><i>i</i></span> <span class="tex-span">(1 ≤ <i>i</i> ≤ <i>n</i> - <i>k</i> + 1)</span> </li>
<li> <span class="tex-span">
<p>subtract <i>1</i></p></span> from values: <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i></sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i> + 1</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i> + <i>k</i> - 1</sub></span></li>
</ul>
</p>
<p>Sereja call array <span class="tex-span"><i>a</i></span> <span class="tex-span"><i>good</i></span> if it is possible to make some operations, that he can and get array that contain only zeros. Now Sereja interested in next question: how many good arrays <span class="tex-span"><i>a</i></span> with length <span class="tex-span"><i>n</i></span> exist?</p></div>

<p>
<div class="input-specification">
<div class="section-title">
<h3>Input</h3>
</div>
</div></p>
<p>First line contain integer <span class="tex-span"><i>T</i></span> — number of testcases. <span class="tex-span"><i>T</i></span> tests follow. Each testcase is given by two integers <span class="tex-span"><i>n</i></span> and <span class="tex-span"><i>k</i></span>.</p>
<p>
<h3>Constrains</h3>
<ul>
<li> <span class="tex-span">1 ≤ <i>T</i> ≤ 10</span> </li>
<li> <span class="tex-span">1 ≤ <i>k</i> ≤ <i>n</i> ≤ 10<sup class="upper-index">5</sup></span> </li>
</ul>

</p>
<p>
<div class="output-specification">
<div class="section-title">
<h3>Output</h3>
</div>
</div></p>
<p>For each testcase output answer modulo <span class="tex-span">10<sup class="upper-index">9</sup> + 7</span>.
</p>
<p>
<div class="sample-tests">
<div class="section-title">
<h3>Examples </h3>
</div>
</div></p>
<p>
<div class="sample-test">
<div class="input">
<div class="title">Input</div>
<pre class="content">3<br />3 3<br />5 2<br />5 1<br /></pre></div>
<div class="output">
<div class="title">Output</div>
<pre class="content">2<br />8<br />32<br /></pre></div>
</div>

</p><p> </p>
<h3>Note</h3>
<p><b>Test #0-1(25 points) n  ≤ </b>15</p>
<p><b>Test #2(25 points) n  ≤ </b>100</p>
<p><b>Test #3(50 points) n  ≤ </b>100000</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2014</td>
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