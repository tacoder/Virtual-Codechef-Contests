<?php require("../../includes/header.php"); ?><h1>References</h1><div class="content">

<p>
            Editors of an electronic magazine make draft versions of the documents in the<br />
            form of text files. However, publications should meet some requirements, in<br />
            particular, concerning the rules of reference use. Unfortunately, lots of the<br />
            draft articles violate some rules. It is desirable to develop a computer program<br />
            that will make a publication satisfy all the rules from a draft version.
        </p>
<p>
            Let&#39;s call a &quot;paragraph&quot; a set of lines in the article going one after another,<br />
            so that paragraphs are separated by at least one empty line (an &quot;empty line&quot; is<br />
            a line that containing no characters different from spaces). Any paragraph can<br />
            contain an arbitrary number of references. A reference is a positive integer not<br />
            greater than 999 enclosed in square brackets (for example: [23]). There will be<br />
            no spaces between the brackets and the number. The square brackets are not used<br />
            in any other context but reference.
        </p>
<p>
            There can be two types of paragraph - &quot;regular&quot; and &quot;reference description&quot;.<br />
            Reference description differs from the regular paragraph because it begins with<br />
            the reference it describes, for example:
        </p>
<p>
            <tt>[23] It is the description ...</tt>
        </p>
<p>
            The opening square bracket will be at the first position of the first line of<br />
            the &quot;reference description&quot; paragraph (i.e. there will be no spaces before it).<br />
            No reference description paragraph will contain references inside itself.
        </p>
<p>
            Each reference will have exactly one corresponding description and each<br />
            description will have at least one reference to it.
        </p>
<p>
            To convert a draft version to a publication you have to use the following rules.
        </p>
<ul>
<li>References should be renumbered by the successive integer numbers starting from<br />
                one in the order of their first appearance in the regular paragraphs of the<br />
                source draft version of the document. </li>
<li>Reference descriptions should be placed at the end of the article ordered by<br />
                their number. </li>
<li>The order of &quot;regular&quot; paragraphs in the document should be preserved. </li>
<li>Your program should not make any other changes to the paragraphs. </li>
</ul>
<p>
            <font face="Arial" size="+1"><b>Input</b></font>
        </p>
<p>
            The input file will be a text file containing a draft article your program<br />
            should process. All lines will be no more than 80 characters long. Any reference<br />
            description will contain no more than 3 lines. The input file will contain up to<br />
            40000 lines.
        </p>
<p>
            <font face="Arial" size="+1"><b>Output</b></font>
        </p>
<p>
            The output file contains the result of processing. All paragraphs should be<br />
            separated by one &quot;true&quot; empty line (i.e. a line that contains no characters at<br />
            all). There should be no empty lines before the first paragraph.
        </p>
<p>
            <font face="Arial" size="+1"><b>Sample input</b></font>
        </p>
<pre><tt>
[5] Brownell, D, &quot;Dynamic Reverse Address Resolution Protocol
    (DRARP)&quot;, Work in Progress.

The Reverse Address Resolution Protocol (RARP) [10] (through the
extensions defined in the Dynamic RARP (DRARP) [5]) explicitly
addresses the problem of network address discovery, and includes an
automatic IP address assignment mechanism.

[10] Finlayson, R., Mann, T., Mogul, J., and M. Theimer, &quot;A Reverse
        Address Resolution Protocol&quot;, RFC 903, Stanford, June 1984.

[16] Postel, J., &quot;Internet Control Message Protocol&quot;, STD 5, RFC 792,
        USC/Information Sciences Institute, September 1981.


The Trivial File Transfer Protocol (TFTP) [20] provides for transport
of a boot image from a boot server.  The Internet Control Message
Protocol (ICMP) [16] provides for informing hosts of additional
routers
via &quot;ICMP redirect&quot; messages.

[20] Sollins, K., &quot;The TFTP Protocol (Revision 2)&quot;,  RFC 783, NIC,
     June 1981.

Works [10], [16] and [20] can be obtained via Internet.
</tt></pre><p>
            <font face="Arial" size="+1"><b>Output for the sample input</b></font>
        </p>
<pre><tt>The Reverse Address Resolution Protocol (RARP) [1] (through the
extensions defined in the Dynamic RARP (DRARP) [2]) explicitly
addresses the problem of network address discovery, and includes an
automatic IP address assignment mechanism.

The Trivial File Transfer Protocol (TFTP) [3] provides for transport
of a boot image from a boot server.  The Internet Control Message
Protocol (ICMP) [4] provides for informing hosts of additional routers
via &quot;ICMP redirect&quot; messages.

Works [1], [4] and [3] can be obtained via Internet.

[1] Finlayson, R., Mann, T., Mogul, J., and M. Theimer, &quot;A Reverse
        Address Resolution Protocol&quot;, RFC 903, Stanford, June 1984.

[2] Brownell, D, &quot;Dynamic Reverse Address Resolution Protocol
    (DRARP)&quot;, Work in Progress.

[3] Sollins, K., &quot;The TFTP Protocol (Revision 2)&quot;,  RFC 783, NIC,
     June 1981.

[4] Postel, J., &quot;Internet Control Message Protocol&quot;, STD 5, RFC 792,
        USC/Information Sciences Institute, September 1981.
</tt></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>30 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>