<?php require("../../includes/header.php"); ?><h1>Roman Numerals in Synapse</h1><div class="content">

<p> The Synapse committee of clowns have decided to give the carnival a retro feel this time around. They have decided to use Roman numerals for all their numbering. As we know the convener of the clowns is bad with numbers we need to help him out with Roman numerals .</p>
<p><br /><br />
Roman numerals use symbols <span style="font-family: monospace;">I</span>, <span style="font-family: monospace;">V</span>, <span style="font-family: monospace;">X</span>, <span style="font-family: monospace;">L</span>, <span style="font-family: monospace;">C</span>, <span style="font-family: monospace;">D</span>, and <span style="font-family: monospace;">M</span> with values 1, 5,<br />
10, 50, 100, 500, and 1000 respectively.&nbsp; There is an easy<br />
evaluation rule for them:<br /></p>
<p><br /><br />
<span style="font-weight: bold;">Rule&nbsp;</span>&#916;:&nbsp;<br />
Add together the values for each symbol that is either the rightmost or<br />
has a symbol of no greater value directly to its right.&nbsp;<br />
Subtract the values of all the other symbols. <br /><br />
<br /><br />
For example:&nbsp; <span style="font-family: monospace;">MMCDLXIX</span> = 1000 + 1000 - 100 + 500 + 50 + 10 - 1<br />
+ 10 = 2469.<br /><br />
<br /><br />
Further rules are needed to uniquely specify a Roman numeral<br />
corresponding to a positive integer less than 4000:<br /></p>
<ol>
1.The numeral has as few characters as possible.&nbsp;<br />
(<span style="font-family: monospace;">IV</span> not <span style="font-family: monospace;">IIII</span>)
<p>2.All the symbols that make positive contributions form a<br />
non-increasing subsequence.&nbsp; (<span style="font-family: monospace;">XIV</span>, not <span style="font-family: monospace;">VIX</span>)
</p><p>3.All subtracted symbols appear as far to the right as<br />
possible.&nbsp; (<span style="font-family: monospace;">MMCDLXIX</span>&nbsp; not <span style="font-family: monospace;">MCMDLIXX</span>)
</p><p>4.Subtracted symbols are always for a power of 10, and always<br />
appear directly to the left of a symbol 5 or 10 times as large that is<br />
added.&nbsp; No subtracted symbol can appear more than once in a<br />
numeral.
</p></ol>
<p>Rule 4 can be removed to allow shorter numerals, and still use the same<br />
evaluation rule:&nbsp; <span style="font-family: monospace;">IM</span>&nbsp; =&nbsp; -1 + 1000 = 999,</p>
<p><span style="font-family: monospace;">ICIC</span> = -1 + 100 + -1 + 100 = 198, <span style="font-family: monospace;">IVC</span> = -1 -5 + 100 = 94.&nbsp;<br />
This would not make the numerals unique, however.&nbsp; Two choices<br />
for 297 would be <span style="font-family: monospace;">CCVCII</span> and <span style="font-family: monospace;">ICICIC</span>.&nbsp; To eliminate the second<br />
choice in this example, Rule 4 can be replaced by<br /></p>
<p><br /></p>
<div style="margin-left: 40px;">4'.&nbsp; With a<br />
choice of numeral representations of the same<br />
length, use one with the fewest subtracted symbols.<br />
</div>
<p><br /><br />
Finally, replace the Roman numeral symbols to make a system that is<br />
more regular and allows larger numbers:&nbsp; Assign the English<br />
letter symbols <span style="font-family: monospace;">a</span>, <span style="font-family: monospace;">A</span>, <span style="font-family: monospace;">b</span>, <span style="font-family: monospace;">B</span>, <span style="font-family: monospace;">c</span>, <span style="font-family: monospace;">C</span>, &#8230;, <span style="font-family: monospace;">y</span>, <span style="font-family: monospace;">Y</span>, <span style="font-family: monospace;">z</span>, and <span style="font-family: monospace;">Z</span> to values 1, 5, 10,<br />
5(10), 10<sup>2</sup>, (5)10<sup>2</sup>, &#8230;, 10<sup>24</sup>,<br />
(5)10<sup>24</sup>, 10<sup>25</sup>,&nbsp;</p>
<p>and (5)10<sup>25</sup><br />
respectively. &nbsp;Though using the <span style="font-style: italic;">whole</span> alphabet makes logical<br />
sense, your problem will use only symbols <span style="font-family: monospace;">a</span>-<span style="font-family: monospace;">R</span> for easier machine<br />
calculations. &nbsp;(<span style="font-family: monospace;">R</span>=&nbsp;(5)10<sup>17</sup>.)<br /></p>
<p><br /><br />
With the new symbols&nbsp;<span style="font-family: monospace;">a</span>-<span style="font-family: monospace;">Z</span>, the original formation rules 1-3, the<br />
alternate rule 4', and the evaluation rule&nbsp;&#916;, numerals can be created,<br />
called A to Z numerals.&nbsp; Examples:&nbsp; <span style="font-family: monospace;">ad</span> = -1 + 1000 =<br />
999; <span style="font-family: monospace;">aAc</span> = -1 - 5 + 100 = 94. Note<br />
that for this problem, an A to Z Numeral cannot include the same uppercase<br />
literal twice. <br /></p>
<p><b>Input: &nbsp;</b>The<br />
input starts with a sequence<br />
of one or more positive integers less than (7)10<sup>17</sup>,<br />
one per line.&nbsp;<br />
The end of the input is indicated by a line containing only 0.</p>
<p><b>Output: &nbsp;</b>For<br />
each positive integer in the<br />
input, output a line containing only an A to Z numeral representing the<br />
integer.<br />
&nbsp;</p>
<table border="1" cellpadding="10">
<thead>
<tr>
<td><b>Example input:</b></td>
<td><b>Example output:</b></td>
</tr>
</thead>
<tbody>
<tr>
<td style="font-family: monospace;">
999<br /><br />
198<br /><br />
98<br /><br />
297<br /><br />
94<br />
<p>666666666666666666<br /><br />
0
</p></td>
<td style="font-family: monospace;" valign="top">
ad<br /><br />
acac<br /><br />
Acaaa<br /><br />
ccAcaa<br /><br />
aAc<br /><br />
RrQqPpOoNnMmLlKkJjIiHhGgFfEeDdCcBbAa
</td>
</tr>
</tbody>
</table>
    </div><table border="1" cellpadding="10">
<thead>
<tr>
<td><b>Example input:</b></td>
<td><b>Example output:</b></td>
</tr>
</thead>
<tbody>
<tr>
<td style="font-family: monospace;">
999<br /><br />
198<br /><br />
98<br /><br />
297<br /><br />
94<br />
<p>666666666666666666<br /><br />
0
</p></td>
<td style="font-family: monospace;" valign="top">
ad<br /><br />
acac<br /><br />
Acaaa<br /><br />
ccAcaa<br /><br />
aAc<br /><br />
RrQqPpOoNnMmLlKkJjIiHhGgFfEeDdCcBbAa
</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wizgen">wizgen</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2012</td>
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