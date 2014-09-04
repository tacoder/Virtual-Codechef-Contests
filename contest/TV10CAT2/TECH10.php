<?php require("../../includes/header.php"); ?><h1>HTML Tags</h1><div class="content">

<p>Given an HTML text and a tag, remove the tag along with its contents. The input text would be properly formatted with each tag having an appropriate end tag at the right position.</p>
<h3>Input</h3>
<p>The first line would contain the number of test cases T. Each of the next T lines (T &lt;= 30) would contain one test case consisting of two inputs, text and tag, formatted as "{text},tag". The input text will contain at least one non - whitespace character. Maximum length = 100.</p>
<h3>Output</h3>
<p>Print T lines, one corresponding to each test case, containing the required answer.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
{&lt;p>this is outside the tag given &lt;algocrack> this is inside the tag&lt;/algocrack>&lt;/p>},algocrack
{again this is outside the tag,&lt;tag>there &lt;tag> can be any&lt;/tag> data here&lt;/tag>},tag

<b>Output:</b>
&lt;p>this is outside the tag given &lt;/p>
again this is outside the tag,

<p>Notes and Constraints: (All quotes for clarity only)
1. The input would consist of only lowercase letters, numbers and spaces.
2. '}' will always be followed by a ','
3. For this problem, anything which is in between '&lt;' and '>' is a valid HTML tag.
4. Extra white spaces would be ignored ie "abc ghi" is same as "abc     ghi", but not the same as "abcghi"
5. If the resulting text after removing the tags does not contain any text, print "NO TEXT"
</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>