package swing;
import javax.swing.*;
import java.awt.*;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Logger;

public class TestSwing {
    private static final Logger LOG = Logger.getLogger(TestSwing.class.getName());

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            JFrame frame = new JFrame();
            frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

            frame.add(new PanelCommon());


            frame.setSize(500, 400);
            frame.setLocationRelativeTo(null);

            frame.setVisible(true);

        });
    }
}


class PanelTextField extends JPanel {

    private JTextField textField;
    private JButton buttonRemove;
    private JPanel panelParent;

    public PanelTextField(JPanel panelParent) {
        setLayout(new BorderLayout());
        this.panelParent = panelParent;
        textField = new JTextField();
        buttonRemove = new JButton("X");
        buttonRemove.addActionListener(e -> {
            SwingUtilities.invokeLater(() -> {
                PanelTextField.this.panelParent.remove(PanelTextField.this);
                PanelTextField.this.panelParent.revalidate();
                PanelTextField.this.panelParent.repaint();
            });
        });

        add(textField, BorderLayout.CENTER);
        add(buttonRemove, BorderLayout.EAST);
    }

    public String getText() {
        return textField.getText();
    }
}

class PanelCommon extends JPanel {

    private JLabel label;

    private List<PanelTextField> panelTextFieldList = new ArrayList();

    private JPanel panelContainer;

    private JButton buttonAdd;
    private JButton buttonShawAllText;

    public PanelCommon() {
        setLayout(new BorderLayout());
        label = new JLabel("Тестовый заголовок");
        add(label, BorderLayout.NORTH);

        panelContainer = new JPanel() {
            @Override
            public void remove(Component comp) {
                panelTextFieldList.remove(comp);
                super.remove(comp);
            }
        };
        panelContainer.setLayout(new BoxLayout(panelContainer, BoxLayout.Y_AXIS));
        add(new JScrollPane(panelContainer), BorderLayout.CENTER);


        buttonAdd = new JButton("Добавить новое поле");
        buttonAdd.addActionListener(e -> {
            SwingUtilities.invokeLater(() -> {
                PanelTextField panelTextField = new PanelTextField(panelContainer);
                panelTextFieldList.add(panelTextField);
                panelContainer.add(panelTextField);
                panelContainer.revalidate();
                PanelCommon.this.revalidate();
            });
        });

        buttonShawAllText = new JButton("Показать весь текст");
        buttonShawAllText.addActionListener(e -> {
            StringBuilder stringBuilder = new StringBuilder();
            for (int i = 0; i < panelTextFieldList.size(); i++) {
                PanelTextField panelTextField = panelTextFieldList.get(i);
                String text = panelTextField.getText();
                if (text != null && !"".equals(text)) {
                    stringBuilder.append((i + 1) + " - " + panelTextField.getText());
                    stringBuilder.append("\n");
                }

            }

            JOptionPane.showMessageDialog(PanelCommon.this, stringBuilder.toString());

        });

        JPanel panel = new JPanel();
        panel.add(buttonAdd);
        panel.add(buttonShawAllText);
        add(panel, BorderLayout.SOUTH);
    }
}
