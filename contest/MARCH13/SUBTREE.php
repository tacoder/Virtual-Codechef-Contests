<?php require("../../includes/header.php"); ?><h1>Festivals</h1><div class="content">

<p>The Chef is enjoying his vacation at the Tree city. As the name of it says, in this city, <b>N</b> locations, numbered from <b>1</b> to <b>N</b>, are connected by <b>N − 1</b> bidirectional roads. Each road connects two cities and you can travel between any pair of cities through this roads system. Each road has the length, which is some positive integer. For any two locations the distance between them is the sum of the roads lengths for the path that connects them.</p>
<p>Some festivals are regularly held in each location. Someday, several festivals (at least 2) take place at different locations. On that day people often participate in two festivals such that the distance between their locations is as large as possible. They move between these two locations to enjoy the festivals. Note that there may be more than one pair of locations satisfying this condition. The path connecting two such locations is called <i>an ideal path</i>.</p>
<p>Knowing this, the Chef wants to find an optimal road where he will open temporary fast-food restaurant to earn as much money as possible from hungry festival participants that move by this road. In his honest opinion the best such road is <b>the shortest road belonging to each ideal path</b>.</p>
<p>More formally he is asking you two questions as follows. Suppose in day <b>X</b>, there are <b>K</b> festivals that take place at <b>K</b> locations <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> respectively.</p>
<ul>
<li>Find the distance between two furthest locations among the <b>K</b> locations listed above. Denote this value as <b>A</b>.</li>
<li>Find the road with the minimal length belonging to each ideal path. That is, each path of length <b>A</b>, that connects <b>F<sub>i</sub></b> and <b>F<sub>j</sub></b> for some <b>i</b> and <b>j</b>, should contain this road. Denote the length of this road as <b>B</b>. If there is no such road than <b>B</b> is set to <b>-1</b>.</li>
<li>Of course, Chef wants to know values <b>A</b> and <b>B</b>.</li>
</ul>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>, denoting the overall number of locations in the Tree city. Each of the following <b>N − 1 </b> lines describes a road and contains three space-separated integers <b>U</b>, <b>V</b> and <b>C</b>, which means that the road of length <b>C</b> connects locations <b>U</b> and <b>V</b>.<br /> The next line contains a single integer <b>Q</b>, denoting the number of questions Chef is asking you. Each of the following <b>Q</b> lines describes a question and contains an integer <b>K</b> followed by <b>K</b> space separated integers <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b>, denoting the locations where the festivals take place.</p>
<h3>Output</h3>
<p>For each question, output on a separate line two space-separated integers <b>A</b> and <b>B</b>. Their meaning is described above.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>U</b>, <b>V</b> ≤ <b>N</b></li>
<li><b>U</b> ≠ <b>V</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10000</b> (<b>10<sup>4</sup></b>)</li>
<li>It is guaranteed that the roads in the input describe a tree of <b>N</b> vertexes</li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> ≤ <b>N</b></li>
<li><b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> are different</li>
<li>The sum of <b>K</b> over the input does not exceed <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6
1 2 3
1 4 2
1 5 2
2 3 3
2 6 3
2
2 2 5
4 3 4 5 6

<b>Output:</b>
5 2
8 3
</pre><h3>Explanation</h3>
<p><b>Example question 1.</b> The only ideal path is between 2 and 5. This path contains two roads: (5, 1) and (1, 2); and (5, 1) is the shortest road among them.</p>
<p><b>Example question 2.</b> The ideal paths are between the following pairs: (3 and 4), (4 and 6), (5 and 3), and (5 and 6). Only road (1, 2) belongs to each ideal path.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-12-2012</td>
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