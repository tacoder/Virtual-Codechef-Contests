<?php require("../../includes/header.php"); ?><h1>Sereja and D</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/mandarin/SEAD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME09/russian/SEAD.pdf">Russian</a>.</h3>
<div class="legend">
<p>Sereja have array that consist of <span class="tex-span"><i>n</i></span> integers <span class="tex-span"><i>a</i><sub class="lower-index">1</sub></span> ≤ <span class="tex-span"><i>a</i><sub class="lower-index">2</sub></span> ≤ <span class="tex-span">...</span> ≤ <span class="tex-span"><i>a</i><sub class="lower-index"><i>n</i></sub></span>. Now Sereja have <span class="tex-span"><i>m</i></span> queries as pair of two integers <span class="tex-span"><i>t</i></span> and <span class="tex-span"><i>d</i></span>. Answer for query will be minimal integer <span class="tex-span"><i>i</i></span> such that exist some <span class="tex-span"><i>k</i></span> <span class="tex-span">(<i>i</i> ≤ <i>k</i>)</span> for which <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i></sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>i</i> + 1</sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>i</i> + 1</sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>i</i> + 2</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>k</i> - 1</sub> + <i>d</i> ≥ <i>a</i><sub class="lower-index"><i>k</i></sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>k</i></sub> ≤ <i>t</i></span> and <span class="tex-span"><i>a</i><sub class="lower-index"><i>k+1</i></sub> &gt; <i>t</i></span>(if it exists).</p>
<p>Help Sereja, find the answer for each query. </p></div>

<p>
<div class="input-specification">
<div class="section-title">
<h3>Input</h3>
</div>
</div></p>
<p>First line of input contain integer <span class="tex-span"><i>n</i></span>. Next line contain <span class="tex-span"><i>n</i></span> integers <span class="tex-span"><i>a</i><sub class="lower-index">1</sub></span>, <span class="tex-span"><i>a</i><sub class="lower-index">2</sub></span>, <span class="tex-span">...</span>, <span class="tex-span"><i>a</i><sub class="lower-index"><i>n</i></sub></span>. Next line contain integer <span class="tex-span"><i>m</i></span>. Next <span class="tex-span"><i>m</i></span> lines contain pairs of integers — queries.
</p>
<p>
<div class="output-specification">
<div class="section-title">
<h3>Output</h3>
</div>
</div></p>
<p>For each query output answer.</p>
<p><h3>Constraints</h3>
<ul>
<li>
<p>1 ≤ <i>n</i>, <i>m</i> ≤ 10<sup class="upper-index">5</sup>. </p>
</li><li><span class="tex-span">1 ≤ <i>a</i><sub class="lower-index"><i>i</i></sub> ≤ 10<sup class="upper-index">6</sup>
<li></li></span> <span class="tex-span"><i>a</i><sub class="lower-index">1</sub> ≤ <i>t</i> ≤ 10<sup class="upper-index">6</sup></span>
</li><li><span class="tex-span">0 ≤ <i>d</i> ≤ 10<sup class="upper-index">6</sup></span>
</li></ul>
<h3>Example</h3>
</p>
<p><b>Input</b>
<pre class="content">5<br />1 2 3 10 50<br />6<br />1 1<br />5 3<br />11 7<br />100000 1<br />1000000 1000000<br />11 6<br /></pre>
<div class="output">
<div class="title"><b>Output</b></div>
<pre class="content">1<br />1<br />1<br />5<br />1<br />4<br /></pre><p> </p>
<p>For <b>30 points(tests 0..20)</b> 1 ≤ <i>n</i>, <i>m</i> ≤ 10000.
</p><p> </p>
<p>For <b>70 points(tests 21..33)</b> 1 ≤ <i>n</i>, <i>m</i> ≤ 100000.</p>
</div></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-02-2014</td>
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