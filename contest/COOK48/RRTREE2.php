<?php require("../../includes/header.php"); ?><h1>Tree Again</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRTREE2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRTREE2.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Misha likes playing DotA and he would do nothing else but play it if he could. Unfortunately for Misha, real life is rough and he has to solve following problem before spending a day playing. <br />
You are given a rooted tree with <b>N</b> vertices. Vertices are numerated from <b>1</b> to <b>N</b> and vertex <b>1</b> is the root of the tree. A positive integer <b>W<sub>i</sub></b> is assigned to every node. Consider following code:</p>
<pre><code>
Integer <b>sum</b> := 0;
Array of boolean marked := {false, false, false, ..., false};
Procedure Dfs(Integer <b>v</b>)
    Begin
        <b>sum</b> := <b>sum</b> + <b>W<sub>v</sub></b>;
        <b>marked[sum]</b> := true;
        For each node <b>u</b> that <b>v</b> is a parent of <b>u</b> do
            Begin
                Dfs(<b>u</b>);
            End;
    End;

</code></pre><p><br />
One can notice that the state of <b>marked[]</b> array depends on the order vertices <b>u</b> processed. You are to check for every integer number <b>s</b> from <b>1</b> to the sum of <b>W<sub>i</sub></b> whether there exists some order of viewing children in <b>Dfs</b> that <b>marked[s] = true.</b>  Note that <b>marked[]</b> and <b>sum</b> are global variables and <b>Dfs(1)</b> is initially called.
 </p>
<p> </p>
<h3>Input</h3>
<p>The first line contains integer <b>N</b> — the number of vertices in given tree. <b>N</b> integers <b>W<sub>i</sub></b> follow in the next line. Then <b>N-1</b> lines follow, <b>i<sup>th</sup></b> of them contains a parent of vertex <b>i+1</b>. </p>
<p> </p>
<h3>Output</h3>
<p>Let <b>S</b> be the sum over all <b>W<sub>i</sub></b>. You should output S characters <b>i<sub>th</sub></b> of which should be equal to <b>1</b> if it is possible to get <b>marked[i] = true</b> and <b>0</b> otherwise. Have a look at the example for better understanding. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ sum of all <b>W<sub>i</sub></b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>100000</b></li>
<li> If <b> u </b> is the parent of vertex <b>v</b>  then <b> u </b>  &lt; <b>v</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 7 7 2 4
1
1
2
4

<b>Output:</b>
100000010100011010001

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-07-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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