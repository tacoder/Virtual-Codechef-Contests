<?php require("../../includes/header.php"); ?><h1>Little Elephant and Order</h1><div class="content">

<p>
The Little Elephant loves lucky strings. Everybody knows that the lucky string is a string of digits that contains only the lucky digits <b>4</b> and <b>7</b>. For example, strings <b>"47"</b>, <b>"744"</b>, <b>"4"</b> are lucky while <b>"5"</b>, <b>"17"</b>, <b>"467"</b> are not.
</p>
<p>
The Little Elephant has the strings <b>A</b> and <b>B</b> of digits. These strings are of equal lengths, that is <b>|A|</b> = <b>|B|</b>. He wants to get some lucky string from them. For this he performs the following operations. At first he arbitrary reorders digits of <b>A</b>. Then he arbitrary reorders digits of <b>B</b>. After that he creates the string <b>C</b> such that its <b>i</b>-th digit is the maximum between the <b>i</b>-th digit of <b>A</b> and the <b>i</b>-th digit of <b>B</b>. In other words, <b>C</b>[<b>i</b>] = <b>max</b>{<b>A</b>[<b>i</b>], <b>B</b>[<b>i</b>]} for <b>i</b> from <b>1</b> to |<b>A</b>|. After that he removes from <b>C</b> all non-lucky digits saving the order of the remaining (lucky) digits. So <b>C</b> now becomes a lucky string. For example, if after reordering <b>A = "754"</b> and <b>B = "873"</b>, then <b>C</b> is at first <b>"874"</b> and then it becomes <b>"74"</b>.
</p>
<p>
The Little Elephant wants the resulting string to be as lucky as possible. The formal definition of this is that the resulting string should be the lexicographically greatest possible string among all the strings that can be obtained from the given strings <b>A</b> and <b>B</b> by the described process.
</p>
<p><b>Notes</b></p>
<ul>
<li><b>|A|</b> denotes the length of the string <b>A</b>.</li>
<li><b>A</b>[<b>i</b>] denotes the <b>i</b>-th digit of the string <b>A</b>. Here we numerate the digits starting from <b>1</b>. So <b>1</b> &le; <b>i</b> &le; |<b>A</b>|.</li>
<li>The string <b>A</b> is called lexicographically greater than the string <b>B</b> if either there exists some index <b>i</b> such that <b>A[i] &gt; B[i]</b> and for each <b>j &lt; i</b> we have <b>A[j] = B[j]</b>, or <b>B</b> is a proper prefix of <b>A</b>, that is, |<b>A</b>| &gt; |<b>B</b>| and first |<b>B</b>| digits of <b>A</b> coincide with the corresponding digits of <b>B</b>.</li>
</ul>
<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case consists of two lines. The first line contains the string <b>A</b>. The second line contains the string <b>B</b>.
</p>
<h3>Output</h3>
<p>
For each test case output a single line containing the answer for the corresponding test case. Note, that the answer can be an empty string. In this case you should print an empty line for the corresponding test case.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> &le; <b>T</b> &le; <b>10000</b><br />
<b>1</b> &le; <b>|A|</b> &le; <b>20000</b><br />
|<b>A</b>| = |<b>B</b>|<br />
Each character of <b>A</b> and <b>B</b> is a digit.<br />
Sum of |<b>A</b>| across all the tests in the input does not exceed <b>200000</b>.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
4
7
435
479
7
8
1675475
9756417

<b>Output:</b>
7
74

777744
</pre><h3>Explanation</h3>
<p>
<b>Case 1.</b> In this case the only possible string <b>C</b> we can get is <b>"7"</b> and it is the lucky string.
</p>
<p>
<b>Case 2.</b> If we reorder <b>A</b> and <b>B</b> as <b>A = "543"</b> and <b>B = "749"</b> the string <b>C</b> will be at first <b>"749"</b> and then becomes <b>"74"</b>. It can be shown that this is the lexicographically greatest string for the given <b>A</b> and <b>B</b>.
</p>
<p>
<b>Case 3.</b> In this case the only possible string <b>C</b> we can get is <b>"8"</b> and it becomes and empty string after removing of non-lucky digits.
</p>
<p>
<b>Case 4.</b> If we reorder <b>A</b> and <b>B</b> as <b>A = "7765541"</b> and <b>B = "5697714"</b> the string <b>C</b> will be at first <b>"7797744"</b> and then becomes <b>"777744"</b>. Note that we can construct any lexicographically greater string for the given <b>A</b> and <b>B</b> since we have only four "sevens" and two "fours" among digits of both strings <b>A</b> and <b>B</b> as well the constructed string <b>"777744"</b>.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-02-2012</td>
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