<?php require("../../includes/header.php"); ?><h1>Idols and Fans</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/IDOLS2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/IDOLS1.pdf">Russian</a> as well.</h3>
<p>Mike is a cool kid, so he's the most popular person in his school. All the girls want to be with him while all the boys want to be like him.</p>
<p>There are <b>N</b> persons in Mike's school. No person in the school has a name(except Mike), but all of them have a unique ID integer number for the range[1..<b>N</b>]. Mike's ID equals to 1. Also, each person(except Mike) has his/her <i>personal idol</i>, who is another person from the school. Finally, each person <b>X</b> has an integer number <b>A<sub>X</sub></b>.</p>
<p>Let's define functions <b>F</b> and <b>G</b> for a person with ID equals to <b>X</b>:</p>
<p><ul>
<li>If <b>X</b> = 1(which means that person <b>X</b> is Mike), then <b>F<sub>X</sub></b> = <b>A<sub>X</sub></b> and <b>G<sub>X</sub></b> = 1;
</li><li>Otherwise, let <b>Y</b> be the personal idol for <b>X</b>.
<ul>
<li>If <b>F<sub>Y</sub></b> + 1 &lt; <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>A<sub>X</sub></b> and <b>G<sub>X</sub></b> = 1;
</li><li>If <b>F<sub>Y</sub></b> + 1 &gt; <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>F<sub>Y</sub></b> + 1 and <b>G<sub>X</sub></b> = <b>G<sub>Y</sub></b>;
</li><li>If <b>F<sub>Y</sub></b> + 1 = <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>F<sub>Y</sub></b> + 1 and <b>G<sub>X</sub></b> = <b>G<sub>Y</sub></b> + 1.
</li></ul>
</li></ul>
</p>
<p>It's guaranteed, that it's possible to calculate functions <b>F</b> and <b>G</b> for every person in the school.</p>
<p>
You are to write a program, that can efficiently process queries of the following types:</p>
<ul>
<li>0 <b>X</b> <b>NEW_VALUE</b> - change the value of <b>A<sub>X</sub></b> to <b>NEW_VALUE</b>;
</li><li>1 <b>X</b> - calculate <b>F<sub>X</sub></b> and <b>G<sub>X</sub></b>.
</li></ul>

<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>, denoting the number of the persons in Mike's school and the number of queries to process.</p>
<p>The second line contains <b>N</b> integers <b>A<sub>i</sub></b>, denoting <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>
<p>The third line contains <b>N - 1</b> integers <b>P<sub>i</sub></b>, denoting the personal idols of persons with IDs equal to 2, 3, ..., <b>N</b>. 1 ≤ <b>P<sub>i</sub></b> &lt; <b>i</b>. </p>
<p>The next <b>Q</b> lines contain information about the queries. The format of the queries is the same with the one described in the statement.</p>
<h3>Output</h3>
<p>For each query of the second type, output a single line containing two integers, <b>F<sub>X</sub></b> and <b>G<sub>X</sub></b>.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 100000;</p>
<p>1 ≤ <b>Q</b> ≤ 300000;</p>
<p>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>, for each person;</p>
<p>1 ≤ <b>X</b> ≤ <b>N</b>, 1 ≤ <b>NEW_VALUE</b> ≤ 10<sup>9</sup>, for each query of the first type.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2
1 2 3 4 5
1 2 3 4
1 5
0 1 100

<b>Output:</b>
5 5
</pre><h3>Explanations</h3>
<p>
In the input, before the second query, <b>F</b>'s and <b>G's</b> equals to the following:
</p>
<p><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>2</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>3</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>5</td>
<td>5</td>
</tr>
</table>
</p>
<p>
After the second query, <b>F</b>'s and <b>G's</b> equals to the following:
</p>
<p><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>100</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>101</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>102</td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>103</td>
<td>1</td>
</tr>
<tr>
<td>5</td>
<td>104</td>
<td>1</td>
</tr>
</table>
</p>    </div><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>2</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>3</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>5</td>
<td>5</td>
</tr>
</table><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>100</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>101</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>102</td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>103</td>
<td>1</td>
</tr>
<tr>
<td>5</td>
<td>104</td>
<td>1</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2014</td>
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