<?php require("../../includes/header.php"); ?><h1>Good galaxy</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/GOODGAL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/GOODGAL.pdf">Russian</a>.</h3>
<p></p>
<p>A galaxy is a set of planets with some connections between pairs of planets. Connections between planets are mutual and no planet can be connected with itself. The distance between a pair of planets is the least number of connections that you have to pass through while travelling from the first planet to the second.</p>
<p>Now let's consider how good galaxies are formed.</p>
<p>Initially there is a galaxy that consists of exactly one planet. At any moment, the galaxy grows by first making a copy of itself; then connecting each planet in the first copy to the corresponding planet in the second copy. Thus a galaxy which has <b>P</b> planets and <b>M</b> connections would grow into a new galaxy with <b>2P</b> planets and <b>2M+P</b> connections.</p>
<p>This diagram shows how the galaxy grows over the first two iterations. Dark grey shows the copy of the galaxy; light grey shows the additional connections.</p>
<p><img src="http://i.imgur.com/d0hcbuK.png" width="329" height="123" /></p>
<p>However, galaxies do not continue growing forever. Why? The answer is simple: comets. At any point after the galaxy has started growing, a comet may pass through the galaxy. When it does, it changes the connections between planets by the following rule:</p>
<p><em>Two planets are connected after the comet arrives if and only if the distance between the planets was equal to 2 before the comet arrives.</em></p>
<p>It can be shown that a comet will split a growing galaxy into two disconnected galaxies with identical structures.</p>
<p>After a comet has arrived, the galaxy stops growing. Researchers have discovered that each of the two identical galaxies formed by the comet are 'good galaxies' - fit for living. In fact, galaxies formed in this way are the <em>only</em> good galaxies that exist.</p>
<p>This diagram shows the result when a comet arrives after each of the first three iterations. In each one the red and blue colours show the two equivalent good galaxies.</p>
<p><img src="http://i.imgur.com/CptdXlM.png" width="329" height="123" /></p>
<p>Unfortunately, nothing lasts forever. For many reasons, such as a second comet appearing, new planets or connections between them may be created or destroyed, resulting in galaxies with many other structures and causing the galaxy to lose its 'good' status.</p>
<p>You are given a galaxy with <b>N</b> planets and <b>M</b> connections. Your task is to determine whether this galaxy is a good galaxy - ie can be created by a comet passing through a growing galaxy.</p>
<h3>Input</h3>
<p>The first line of the input contains one integer <b>T</b> denoting the number of test cases. </p>
<p>The first line of each test case contains two integers <b>N</b> and <b>M</b> - the number of planets in the galaxy and the number of connections. All planets are enumerated from 1 to <b>N</b>. </p>
<p>The following <b>M</b> lines each contain a pair of different integers - two planets which are connected in the galaxy. It's guaranteed that there won't be multiple connections between any pair of planets.</p>
<h3>Output</h3>
<p>For each test case output one word per line: "YES" if the galaxy is a good galaxy, or "NO" if it is not.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1024</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>40 000</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<b>Subtask #1 </b> [22 points]: <b>N</b> ≤ <b>32</b>
</ul>
<ul>
<b>Subtask #2</b> [78 points]: maximum constraints
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
2 1
1 2

2 0

3 3
1 2
2 3
1 3

4 6
1 2
1 3
1 4
2 3
2 4
3 4

4 5
1 2
1 3
1 4
2 3
2 4

<b>Output:</b>
YES
NO
NO
YES
NO
</pre>
<h3>Explanation</h3>
<p><b>Test case 1.</b> This galaxy is equivalent to the red (or blue) galaxy in step 2 in the above image.</p>
<p><b>Test case 2.</b> This galaxy is similar to test case 1, but the connection has been destroyed, so the galaxy is no longer good.</p>
<p><b>Test case 3.</b> There are no good galaxies with 3 planets; some planets must have been destroyed.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pavel1996">pavel1996</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>