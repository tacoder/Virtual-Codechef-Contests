<?php require("../../includes/header.php"); ?><h1>Project Spoon</h1><div class="content">
<p>Lo and Behold! For you may be surprised by what our chief chef Noodle has in mind for this season! Today, Noodle announced one of his most extra-ordinary ideas ever - <b>Project Spoon</b>. <br /><br /></p>
<p>Noodle plans to deploy large spoons in the atmosphere so that people all around the world can download food directly from his kitchen thereby saving him a lot of overhead cost. Yes, you read that right. Large spoons suspended in the atmosphere.</p>
<p>Lo and Behold! For you may be surprised by what our chief chef Noodle has in mind for this season! Today, Noodle announced one of his most extra-ordinary ideas ever - <b>Project Spoon</b>. <br /><br /></p>
<p>Noodle plans to deploy large spoons in the atmosphere so that people all around the world can download food directly from his kitchen thereby saving him a lot of overhead cost. Yes, you read that right. Large spoons suspended in the atmosphere.</p>
<p>Noodle decides the following strategy to implement his idea. He will deploy exactly <b>N</b> spoons in the country. Every spoon can cater to as many cities as it wants. The only catch is that between every pair of  spoons <b>A</b> and <b>B</b>,  <b>A</b> must cater to at-least one city that <b>B</b> doesn't cater to, and <b> B </b> must cater to at-least one city that <b>A</b> doesn't cater to.</p>
<p>Noodle would like to know what is the minimum number of cities a country must have for his strategy to be successful. Since, he is not all that good with calculation, he asks you to help him with it.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contain an integer <b>N</b>, the number of spoons that Noodle plans to deploy in the country.</p>
<h3>Output</h3>
<p>For every test case, print in a single line the number of minimum cities required.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b> 100000 </b></li>
<li><b> 2 </b> ≤ <b>N</b> ≤ <b> 10<sup>18</sup> </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3

<b>Output:</b>
2
3
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br /> Each spoon caters to a different city. Since there are two spoons, two cities are sufficient.</p>
<p><b>Example case 2.</b><br /><br /> Again, each spoon needs to cater to one city and there are three spoons. So, three cities are required at minimum.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-07-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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