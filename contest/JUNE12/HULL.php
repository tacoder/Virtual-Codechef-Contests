<?php require("../../includes/header.php"); ?><h1>Magic Hull</h1><div class="content">

<p>You are given a set of <b>N</b> two-dimensional non-zero vectors (<b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b>), (<b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b>), ..., (<b>X<sub>N</sub></b>, <b>Y<sub>N</sub></b>) with integer coordinates. You can choose no more than <b>6</b> vectors from this set to form a <b>non-strictly convex polygon</b> that have sides equal to these vectors (see paragraph below for more detailed explanation). Non-strictly convex polygon is the polygon that can have flat angles (angles of <b>180</b> degrees). You can select each vector several times if needed. Your goal is to maximize the area of this polygon. It is guaranteed that at least one such convex polygon can be constructed.</p>
<p>How exactly we construct a polygon from the given sequence of vectors? Suppose you've chosen the sequence of vectors (<b>U<sub>1</sub></b>, <b>V<sub>1</sub></b>), (<b>U<sub>2</sub></b>, <b>V<sub>2</sub></b>), ..., (<b>U<sub>K</sub></b>, <b>V<sub>K</sub></b>), where <b>3</b> ≤ <b>K</b> ≤ <b>6</b>. Each vector here should be equal to one of the given <b>N</b> vectors but some vectors in this sequence can coincide. At first, you take some point (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>) at the plane as the first vertex of your polygon. Then you put your first vector (<b>U<sub>1</sub></b>, <b>V<sub>1</sub></b>) to this point to obtain the second vertex (<b>A<sub>2</sub></b>, <b>B<sub>2</sub></b>) = (<b>A<sub>1</sub></b> + <b>U<sub>1</sub></b>, <b>B<sub>1</sub></b> + <b>V<sub>1</sub></b>). Next you take the second vector and put it to the second vertex to obtain the third vertex and so on. Finally, at the last step you put vector (<b>U<sub>K</sub></b>, <b>V<sub>K</sub></b>) to the <b>K</b><sup>th</sup> vertex (<b>A<sub>K</sub></b>, <b>B<sub>K</sub></b>) to obtain the point (<b>A<sub>K + 1</sub></b>, <b>B<sub>K + 1</sub></b>) = (<b>A<sub>K</sub></b> + <b>U<sub>K</sub></b>, <b>B<sub>K</sub></b> + <b>V<sub>K</sub></b>) that should coincide with the first vertex (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>), otherwise we should reject this sequence of vectors. Hence in the end we obtain a polygon with vertexes (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>), (<b>A<sub>2</sub></b>, <b>B<sub>2</sub></b>), ..., (<b>A<sub>K</sub></b>, <b>B<sub>K</sub></b>). If this polygon is simple (without self-intersections) and non-strictly convex, we should consider its area as the candidate for the answer. By self-intersection we mean that either some non-consecutive sides (considered with their ends) have common point or two consecutive sides have more than one common point.</p>
<h3>Input</h3>
<p>The first line of the input file contains an integer <b>N</b>, the number of the given vectors. Each of the following <b>N</b> lines contains two space separated integers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>, coordinates of the corresponding vector.</p>
<h3>Output</h3>

<p>In the only line of the output file print the maximal possible area of the convex polygon that can be constructed by the rules described in the problem statement with exactly one digit after the decimal point.</p>
<h3>Constraints</h3>

<p><b>3</b> ≤ <b>N</b> ≤ <b>150</b></p>
<p><b>|X<sub>i</sub>|</b>, <b>|Y<sub>i</sub>|</b> ≤ <b>1000000</b></p>
<p>All vectors are non-zero: <b>|X<sub>i</sub>|</b> + <b>|Y<sub>i</sub>|</b> &gt; 0</p>
<p>There exists at least one sequence of at most <b>6</b> vectors from this set that forms a convex polygon.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
3 0
-1 1
-1 0
-1 -1

<b>Output:</b>
2.0
</pre><h3>Explanation</h3>
<p>The only non-strictly convex polygon you can construct from these vectors by the rules described in the problem statement is the <a href="http://en.wikipedia.org/wiki/Isosceles_trapezoid">isosceles trapezoid</a> that has height of length <b>1</b> and bases of length <b>1</b> and <b>3</b>. It has area <b>2.0</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-03-2012</td>
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